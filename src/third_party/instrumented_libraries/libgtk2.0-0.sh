#!/bin/bash
# Copyright 2014 The Chromium Authors. All rights reserved.
# Use of this source code is governed by a BSD-style license that can be
# found in the LICENSE file.

# This script does some preparations before build of instrumented libgtk2.0-0.

patch -p1 < $(dirname ${BASH_SOURCE[0]})/libgtk2.0-0.diff
autoreconf