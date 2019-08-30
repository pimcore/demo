
SET NAMES utf8mb4;

INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('61','AppBundle','@AppBundle\\Controller\\CheckoutController','confirmationMail',NULL,'','','','','','Order Confirmation for %Text(ordernumber);');
INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('93','AppBundle','@AppBundle\\Controller\\DefaultController','genericMail',NULL,'','','','','','Password Recovery');
INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('105',NULL,'@AppBundle\\Controller\\DefaultController','genericMail',NULL,'','','','','','Newsletter Confirmation');
INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('111',NULL,'@AppBundle\\Controller\\DefaultController','genericMail',NULL,'','','','','','We have more for you');
INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('144','AppBundle','@AppBundle\\Controller\\CheckoutController','confirmationMail',NULL,'','','','','','Order Confirmation for %Text(ordernumber);');
INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('145','AppBundle','@AppBundle\\Controller\\DefaultController','genericMail',NULL,'','','','','','Password Recovery');
INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('146',NULL,'@AppBundle\\Controller\\DefaultController','genericMail',NULL,'','','','','','Newsletter Confirmation');
INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('147',NULL,'@AppBundle\\Controller\\DefaultController','genericMail',NULL,'','','','','','We have more for you');
