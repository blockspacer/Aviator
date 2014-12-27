// Copyright 2014 The Chromium Authors. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.

#include "base/message_loop/message_loop.h"
#include "base/test/simple_test_tick_clock.h"
#include "chrome/common/cast_messages.h"
#include "chrome/renderer/media/cast_ipc_dispatcher.h"
#include "ipc/ipc_message_macros.h"
#include "media/cast/logging/logging_defines.h"
#include "testing/gtest/include/gtest/gtest.h"

namespace {

class CastIPCDispatcherTest : public testing::Test {
 public:
  CastIPCDispatcherTest() {
    dispatcher_ = new CastIPCDispatcher(base::MessageLoopProxy::current());
  }

 protected:
  void FakeSend(const IPC::Message& message) {
    EXPECT_TRUE(dispatcher_->OnMessageReceived(message));
  }

  scoped_refptr<CastIPCDispatcher> dispatcher_;
  base::MessageLoopForIO message_loop_;
};

TEST_F(CastIPCDispatcherTest, RawEvents) {
  const int kChannelId = 17;
  std::vector<media::cast::PacketEvent> packet_events;
  media::cast::PacketEvent packet_event;
  packet_event.rtp_timestamp = 100;
  packet_event.max_packet_id = 10;
  packet_event.packet_id = 5;
  packet_event.size = 512;
  packet_event.timestamp = base::SimpleTestTickClock().NowTicks();
  packet_event.type = media::cast::PACKET_SENT_TO_NETWORK;
  packet_event.media_type = media::cast::VIDEO_EVENT;

  packet_events.push_back(packet_event);
  CastMsg_RawEvents raw_events_msg(kChannelId, packet_events);

  FakeSend(raw_events_msg);
}

}  // namespace
