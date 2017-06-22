INSERT INTO documents (parentId, type, `key`, path, `index`, published, creationDate, modificationDate, userOwner, userModification) VALUES (0, 'page', '', '/', 999999, 1, 1498107727, 1498107727, 1, 1);
INSERT INTO documents (parentId, type, `key`, path, `index`, published, creationDate, modificationDate, userOwner, userModification) VALUES (1, 'folder', 'document', '/', 1, 1, 1498108193, 1498108193, 2, 2);
INSERT INTO documents (parentId, type, `key`, path, `index`, published, creationDate, modificationDate, userOwner, userModification) VALUES (2, 'page', 'info', '/document/', 1, 1, 1498108197, 1498108474, 2, 2);
INSERT INTO documents (parentId, type, `key`, path, `index`, published, creationDate, modificationDate, userOwner, userModification) VALUES (2, 'page', 'request-info', '/document/', 2, 1, 1498111772, 1498111784, 2, 2);

INSERT INTO documents_page (id, module, controller, action, template, title, description, metaData, prettyUrl, contentMasterDocumentId, personas, legacy) VALUES (1, null, 'default', 'default', '', '', '', null, null, null, null, null);
INSERT INTO documents_page (id, module, controller, action, template, title, description, metaData, prettyUrl, contentMasterDocumentId, personas, legacy) VALUES (3, 'AppBundle', 'Demo', 'info', null, '', '', 'a:0:{}', null, null, '', 0);
INSERT INTO documents_page (id, module, controller, action, template, title, description, metaData, prettyUrl, contentMasterDocumentId, personas, legacy) VALUES (4, null, '@AppBundle\\Controller\\DemoServiceController', 'requestInfo', null, '', '', 'a:0:{}', null, null, '', 0);
