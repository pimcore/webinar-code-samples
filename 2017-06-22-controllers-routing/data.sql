INSERT INTO `documents` VALUES (1, 0, 'page', '', '/', 999999, 1, 1498107727, 1498107727, 1, 1);
INSERT INTO `documents` VALUES (2, 1, 'folder', 'document', '/', 1, 1, 1498108193, 1498108193, 2, 2);
INSERT INTO `documents` VALUES (3, 2, 'page', 'info', '/document/', 0, 1, 1498108197, 1498108474, 2, 2);
INSERT INTO `documents` VALUES (4, 2, 'page', 'hello', '/document/', 1, 1, 1498120038, 1498120054, 2, 2);
INSERT INTO `documents` VALUES (5, 2, 'page', 'request-info', '/document/', 2, 1, 1498111772, 1498111784, 2, 2);

INSERT INTO `documents_page` VALUES (1, NULL, 'default', 'default', '', '', '', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `documents_page` VALUES (3, 'AppBundle', 'Demo', 'info', NULL, '', '', 'a:0:{}', NULL, NULL, '', 0);
INSERT INTO `documents_page` VALUES (4, 'AppBundle', 'Demo', 'hello', NULL, '', '', 'a:0:{}', NULL, NULL, '', 0);
INSERT INTO `documents_page` VALUES (5, NULL, '@AppBundle\\Controller\\DemoServiceController', 'requestInfo', NULL, '', '', 'a:0:{}', NULL, NULL, '', 0);
