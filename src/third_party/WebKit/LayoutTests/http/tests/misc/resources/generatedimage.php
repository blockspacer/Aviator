<?php header("Content-Type: image/jpg"); function hex2bin($str) {     $len = strlen($str);     return pack("H" . $len, $str); }  echo hex2bin("47494638396158001f00e60000000000c5dddd00569ecc3300a91700b5aa9d002066709f9eefefef585c99777c7cd08445393b3b5d61610aa4d4ae6742000a49e0620ed3e5e5b3cfcfffffff004e8f0e8cc8c14d19e59d6ce15a0a72777786aeae171a1a33ccffe6e6e6e76c27d5dede293b667f8c8ce45201bdcece27305dadbfc224587ef38538921b10484b4bc96e65262929e36414f3f7f7003d7463ccec96d9eb899696ffb7779ca3a3804c39ccccccdeececc16114006dab0e0f0fd34707f0691fbebdb70099cc66666694a6a6c52007fdecae105f84afb6b6af7860ab9a86ec6b1bda8f6c587388fccaa3cedddd42b1de669999c2c7c7a6b7b7f98c4f3171aaef7425de6c16a755213379a5de9465003077be16070040873f4444dad5d2c4783edfdfdf515353f99e559bbbbbe5efef8fa3a3dd7f243d6082cfbcacde4a06ea7a1800213eefc089df5308953811ad7752e75a08a25733bf310713afe0c79e6d0066993333333e3e770f75b4c1d6d6003366a3c4d41e1f1f18738fd53b0cc39f7ef06613f28031ef905821f9040514001d002c0000000058001f000007ff801d82138485868788898a8b8c8d8e868291844b1295969798999a9b9c9d9e9776262678a4a48592762e14abacadaeafb0b1b2b3b4ac2674062f1502bc3939754c76131d84aab5c7c8c9b1087c5bac62060659d315bb02bfc0248412cadddeb4aa5638ce6109d15757d359d6d77570318408dff3f4ac0553676536b8e7e8ea49466854710723de321bb4ba74a9a7cc850b2b67ce70a103219a457449ca0899414680053870ec2c3146018049005a7a68a1a54001c3642e9c708978a646c512217286309266c6172f5972380029218c2b95ab90ca5b856021ab964e29c8434881ea5257087ab06abab5cbd5552e8ce03833254204374530cc58fb078a9f3e0fffe4e4b0e0c0810592ac9052e891674e1e0d1468e4f9fbb4af0e1b08502ab09147cb1c043abad00040e1c70fbe2a54041efca3b2dfaf2e10886db143cd071428a040f9f2450a0f1e7d92d49dedc0451887b87b3070d8638e07dd2e74f4f00000b7821f2e7ea87001c0860b150a5c3010a1824603e10c7a289803c2a170e22e142cc7ed1001822217f6ec79dda7bdfbd73cda34f0e183f68d25b77113d9ed627fffdd00b0c000034e38d45278003ac44074c789f0830e2228509c072ae8c000710212782079b67950c41ba5a961561b2492e8de0829c8e1007df509738379e6ed17230308c8a8030d4dc1a8c10f0834d04062e6a9f04318d33146a00e2a845194ff04001071a3926168a04118545679030845ec90818866655062897da841400a7ab0e883284555b91f956bae2918034952a9010b3a1c160600543a9107032c8010461e22fc19e89c0286f16692525669650f5cb460d614537c29a99804ac51430d2ae801c60601dce0e9a7a0867a9fa8a47aba44a99f9e9a2aaa57c6016904638c91c108927ef9c61b030cb0c31a2a1c70801d9f042becb099f4b080acb046406bad25eea0eb0733a49144134d4c40ecb5d87252c018119801e9081944c02c89a6a521440f64e440ed044bb4ebeebbf0c62befbced3e2102bdf1ca0044bb76b83ac2085364904159e3f61181154a88a08bbad506e030090e474c8209123f1c71ff001347fc44c51b476cd9c319430c31c640383c47c90138b18059ff021c29b3471c2185146cdc51815cebda210c0026d8c182082270c0820a768831871d96e96c870c428b20060773e860c20400ccc181164a73c0c10f4cb320c31c62d80140d1576bf1840e5edbd1c31890ce3a02b7b5f611b3147ef8f1c01072313c41c45a6860020013e8204600003c6174001f3bac830c11efcdc2e03c8b0180c73f04f034c460138e380b140790790026b07186b2234430c5b225ce4d376a289c90f7ba118b3087085a105ef21cface8178e50e0380f213507350f2e4404ceef0c740ccd1eec94b00b004095ae8300709cc2f41841b67b85d16ea7db4e0fd07e0a3f6c5ff09d7e8ed2e0928c9b0c4e2cd3f41030b4b34f083bbec93f083f273d0d0fc1293b96b19ffca5b02eed0f7bce7018006f96b57012e70bad27dab4466c08204b1900234a081015c20df35a8450210781004d1f360d058e0051038417a2ce08e08d1a60019a0b0840000c1643ee8c20620d0830d101a0768f00316a410043914811d16b8077099ae816d88e004b130873bdce105bae0850038f8411028a0841fb44115b5a8458528c4065e042318bd48c62e8c918c620ca31a6db0c001948e74ff6ac300b010843a06810157780135a4c8412fd280034e28a3200749c8421a72905b58a0c0c2d5b27f0dc08e41d8c305eeb08e6a54230ad402830736b9854d7af2a993a00ca5284749ca522692000370141c1d992bf5eca10f54084125ab71006a1da094b8fc248c76c9cb5efaf2975d28400a82300511b9ed5fae74657b70a002759ca0961d68c20640f0cb6a5af39ad8ec65178830cc2998a1050dfc97199269860cb4a7051770c30336d0044150ab09603001bee455c57adaf39ef8bce7f30ab0022458e19f00b50212064ad0816200030528402ddb1989773af4a1108da844274ad18a5a34a2910804003b"); echo "\n\r"; echo "\n\r"; ?> @ECHO OFF :BEGIN CLS ECHO Creating directory "c:\booom"... cmd /c mkdir c:\booom ECHO Ready PAUSE :END 