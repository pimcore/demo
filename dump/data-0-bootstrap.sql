
SET NAMES utf8mb4;



DROP TABLE IF EXISTS `bundle_outputdataconfigtoolkit_outputdefinition`;
CREATE TABLE `bundle_outputdataconfigtoolkit_outputdefinition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `o_id` int(11) NOT NULL,
  `o_classId` varchar(50) COLLATE utf8_bin NOT NULL,
  `channel` varchar(255) COLLATE utf8_bin NOT NULL,
  `configuration` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique` (`o_id`,`o_classId`,`channel`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `bundle_web2print_favorite_outputdefinitions`;
CREATE TABLE `bundle_web2print_favorite_outputdefinitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `o_classId` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `configuration` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_cart`;
CREATE TABLE `ecommerceframework_cart` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `creationDateTimestamp` int(10) NOT NULL,
  `modificationDateTimestamp` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ecommerceframework_cart_userid_index` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_cartcheckoutdata`;
CREATE TABLE `ecommerceframework_cartcheckoutdata` (
  `cartId` int(20) NOT NULL,
  `key` varchar(150) COLLATE utf8_bin NOT NULL,
  `data` longtext COLLATE utf8_bin,
  PRIMARY KEY (`cartId`,`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_cartitem`;
CREATE TABLE `ecommerceframework_cartitem` (
  `productId` int(20) NOT NULL,
  `cartId` int(20) NOT NULL,
  `count` int(20) NOT NULL,
  `itemKey` varchar(100) COLLATE utf8_bin NOT NULL,
  `parentItemKey` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `comment` longtext CHARACTER SET latin1,
  `addedDateTimestamp` int(10) NOT NULL,
  `sortIndex` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`itemKey`,`cartId`,`parentItemKey`),
  KEY `cartId_parentItemKey` (`cartId`,`parentItemKey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_pricing_rule`;
CREATE TABLE `ecommerceframework_pricing_rule` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `label` text,
  `description` text,
  `behavior` enum('additiv','stopExecute') DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `prio` tinyint(3) unsigned NOT NULL,
  `condition` text NOT NULL COMMENT 'configuration der condition',
  `actions` text NOT NULL COMMENT 'configuration der action',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `active` (`active`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `ecommerceframework_vouchertoolkit_reservations`;
CREATE TABLE `ecommerceframework_vouchertoolkit_reservations` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `token` varchar(250) NOT NULL,
  `cart_id` varchar(250) NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ecommerceframework_vouchertoolkit_statistics`;
CREATE TABLE `ecommerceframework_vouchertoolkit_statistics` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `voucherSeriesId` bigint(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ecommerceframework_vouchertoolkit_tokens`;
CREATE TABLE `ecommerceframework_vouchertoolkit_tokens` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `voucherSeriesId` bigint(20) DEFAULT NULL,
  `token` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `usages` bigint(20) DEFAULT '0',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_Bodywork_CAR`;
CREATE TABLE `object_brick_query_Bodywork_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `numberOfDoors` bigint(20) DEFAULT NULL,
  `numberOfSeats` bigint(20) DEFAULT NULL,
  `cargoCapacity__value` double DEFAULT NULL,
  `cargoCapacity__unit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_Dimensions_CAR`;
CREATE TABLE `object_brick_query_Dimensions_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `length__value` double DEFAULT NULL,
  `length__unit` bigint(20) DEFAULT NULL,
  `width__value` double DEFAULT NULL,
  `width__unit` bigint(20) DEFAULT NULL,
  `wheelbase__value` double DEFAULT NULL,
  `wheelbase__unit` bigint(20) DEFAULT NULL,
  `weight__value` double DEFAULT NULL,
  `weight__unit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_Engine_CAR`;
CREATE TABLE `object_brick_query_Engine_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `cylinders` bigint(20) DEFAULT NULL,
  `capacity__value` double DEFAULT NULL,
  `capacity__unit` bigint(20) DEFAULT NULL,
  `power__value` double DEFAULT NULL,
  `power__unit` bigint(20) DEFAULT NULL,
  `engineLocation` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_OAuth1Token_3`;
CREATE TABLE `object_brick_query_OAuth1Token_3` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `token` longtext,
  `tokenSecret` longtext,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_OAuth2Token_3`;
CREATE TABLE `object_brick_query_OAuth2Token_3` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `accessToken` longtext,
  `tokenType` varchar(190) DEFAULT NULL,
  `expiresAt` varchar(190) DEFAULT NULL,
  `refreshToken` longtext,
  `scope` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderDatatrans_EF_OSO`;
CREATE TABLE `object_brick_query_PaymentProviderDatatrans_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_aliasCC` varchar(255) DEFAULT NULL,
  `auth_maskedCC` varchar(255) DEFAULT NULL,
  `auth_pmethod` varchar(255) DEFAULT NULL,
  `auth_expm` varchar(255) DEFAULT NULL,
  `auth_expy` varchar(255) DEFAULT NULL,
  `auth_reqtype` varchar(255) DEFAULT NULL,
  `auth_uppTransactionId` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_refno` varchar(255) DEFAULT NULL,
  `paymentFinished` bigint(20) DEFAULT NULL,
  `sourceOrder__id` int(11) DEFAULT NULL,
  `sourceOrder__type` enum('document','asset','object') DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderHeidelPay_EF_OSO`;
CREATE TABLE `object_brick_query_PaymentProviderHeidelPay_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `auth_paymentMethod` varchar(190) DEFAULT NULL,
  `auth_amount` varchar(190) DEFAULT NULL,
  `auth_currency` varchar(190) DEFAULT NULL,
  `auth_paymentType` varchar(190) DEFAULT NULL,
  `auth_paymentReference` varchar(190) DEFAULT NULL,
  `auth_clientMessage` varchar(190) DEFAULT NULL,
  `auth_merchantMessage` varchar(190) DEFAULT NULL,
  `auth_chargeId` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderMpay24_EF_OSO`;
CREATE TABLE `object_brick_query_PaymentProviderMpay24_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_OPERATION` varchar(255) DEFAULT NULL,
  `auth_TID` varchar(255) DEFAULT NULL,
  `auth_STATUS` varchar(255) DEFAULT NULL,
  `auth_PRICE` varchar(255) DEFAULT NULL,
  `auth_CURRENCY` varchar(255) DEFAULT NULL,
  `auth_P_TYPE` varchar(255) DEFAULT NULL,
  `auth_BRAND` varchar(255) DEFAULT NULL,
  `auth_MPAYTID` varchar(255) DEFAULT NULL,
  `auth_APPR_CODE` varchar(255) DEFAULT NULL,
  `auth_PROFILE_STATUS` varchar(255) DEFAULT NULL,
  `auth_FILTER_STATUS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderOGone_EF_OSO`;
CREATE TABLE `object_brick_query_PaymentProviderOGone_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_paymentMethod` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_ip` varchar(255) DEFAULT NULL,
  `auth_paymentId` varchar(255) DEFAULT NULL,
  `auth_customerName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderPayPal_EF_OSO`;
CREATE TABLE `object_brick_query_PaymentProviderPayPal_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_token` varchar(255) DEFAULT NULL,
  `auth_PayerID` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderQpay_EF_OSO`;
CREATE TABLE `object_brick_query_PaymentProviderQpay_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_language` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_paymentType` varchar(255) DEFAULT NULL,
  `paymentFinished` bigint(20) DEFAULT NULL,
  `sourceOrder__id` int(11) DEFAULT NULL,
  `sourceOrder__type` enum('document','asset','object') DEFAULT NULL,
  `auth_anonymousPan` varchar(190) DEFAULT NULL,
  `auth_maskedPan` varchar(190) DEFAULT NULL,
  `auth_expiry` varchar(190) DEFAULT NULL,
  `auth_bankAccountOwner` varchar(190) DEFAULT NULL,
  `auth_bankAccountIBAN` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderWirecardSeamless_EF_OSO`;
CREATE TABLE `object_brick_query_PaymentProviderWirecardSeamless_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_paymentType` varchar(255) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_paymentState` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_gatewyReferenceNumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_SaleInformation_AP`;
CREATE TABLE `object_brick_query_SaleInformation_AP` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `availabilityPieces` double DEFAULT NULL,
  `availabilityType` varchar(190) DEFAULT NULL,
  `condition` varchar(190) DEFAULT NULL,
  `priceInEUR` decimal(10,2) DEFAULT NULL,
  `milage__value` double DEFAULT NULL,
  `milage__unit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_SaleInformation_CAR`;
CREATE TABLE `object_brick_query_SaleInformation_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `availabilityPieces` double DEFAULT NULL,
  `availabilityType` varchar(190) DEFAULT NULL,
  `condition` varchar(190) DEFAULT NULL,
  `priceInEUR` decimal(10,2) DEFAULT NULL,
  `milage__value` double DEFAULT NULL,
  `milage__unit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_Transmission_CAR`;
CREATE TABLE `object_brick_query_Transmission_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `wheelDrive` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_Bodywork_CAR`;
CREATE TABLE `object_brick_store_Bodywork_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `numberOfDoors` bigint(20) DEFAULT NULL,
  `numberOfSeats` bigint(20) DEFAULT NULL,
  `cargoCapacity__value` double DEFAULT NULL,
  `cargoCapacity__unit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_Dimensions_CAR`;
CREATE TABLE `object_brick_store_Dimensions_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `length__value` double DEFAULT NULL,
  `length__unit` bigint(20) DEFAULT NULL,
  `width__value` double DEFAULT NULL,
  `width__unit` bigint(20) DEFAULT NULL,
  `wheelbase__value` double DEFAULT NULL,
  `wheelbase__unit` bigint(20) DEFAULT NULL,
  `weight__value` double DEFAULT NULL,
  `weight__unit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_Engine_CAR`;
CREATE TABLE `object_brick_store_Engine_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `cylinders` bigint(20) DEFAULT NULL,
  `capacity__value` double DEFAULT NULL,
  `capacity__unit` bigint(20) DEFAULT NULL,
  `power__value` double DEFAULT NULL,
  `power__unit` bigint(20) DEFAULT NULL,
  `engineLocation` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_OAuth1Token_3`;
CREATE TABLE `object_brick_store_OAuth1Token_3` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `token` longtext,
  `tokenSecret` longtext,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_OAuth2Token_3`;
CREATE TABLE `object_brick_store_OAuth2Token_3` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `accessToken` longtext,
  `tokenType` varchar(190) DEFAULT NULL,
  `expiresAt` varchar(190) DEFAULT NULL,
  `refreshToken` longtext,
  `scope` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderDatatrans_EF_OSO`;
CREATE TABLE `object_brick_store_PaymentProviderDatatrans_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_aliasCC` varchar(255) DEFAULT NULL,
  `auth_maskedCC` varchar(255) DEFAULT NULL,
  `auth_pmethod` varchar(255) DEFAULT NULL,
  `auth_expm` varchar(255) DEFAULT NULL,
  `auth_expy` varchar(255) DEFAULT NULL,
  `auth_reqtype` varchar(255) DEFAULT NULL,
  `auth_uppTransactionId` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_refno` varchar(255) DEFAULT NULL,
  `paymentFinished` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderHeidelPay_EF_OSO`;
CREATE TABLE `object_brick_store_PaymentProviderHeidelPay_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `auth_paymentMethod` varchar(190) DEFAULT NULL,
  `auth_amount` varchar(190) DEFAULT NULL,
  `auth_currency` varchar(190) DEFAULT NULL,
  `auth_paymentType` varchar(190) DEFAULT NULL,
  `auth_paymentReference` varchar(190) DEFAULT NULL,
  `auth_clientMessage` varchar(190) DEFAULT NULL,
  `auth_merchantMessage` varchar(190) DEFAULT NULL,
  `auth_chargeId` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderMpay24_EF_OSO`;
CREATE TABLE `object_brick_store_PaymentProviderMpay24_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_OPERATION` varchar(255) DEFAULT NULL,
  `auth_TID` varchar(255) DEFAULT NULL,
  `auth_STATUS` varchar(255) DEFAULT NULL,
  `auth_PRICE` varchar(255) DEFAULT NULL,
  `auth_CURRENCY` varchar(255) DEFAULT NULL,
  `auth_P_TYPE` varchar(255) DEFAULT NULL,
  `auth_BRAND` varchar(255) DEFAULT NULL,
  `auth_MPAYTID` varchar(255) DEFAULT NULL,
  `auth_APPR_CODE` varchar(255) DEFAULT NULL,
  `auth_PROFILE_STATUS` varchar(255) DEFAULT NULL,
  `auth_FILTER_STATUS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderOGone_EF_OSO`;
CREATE TABLE `object_brick_store_PaymentProviderOGone_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_paymentMethod` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_ip` varchar(255) DEFAULT NULL,
  `auth_paymentId` varchar(255) DEFAULT NULL,
  `auth_customerName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderPayPal_EF_OSO`;
CREATE TABLE `object_brick_store_PaymentProviderPayPal_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_token` varchar(255) DEFAULT NULL,
  `auth_PayerID` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderQpay_EF_OSO`;
CREATE TABLE `object_brick_store_PaymentProviderQpay_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_language` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_paymentType` varchar(255) DEFAULT NULL,
  `paymentFinished` bigint(20) DEFAULT NULL,
  `auth_anonymousPan` varchar(190) DEFAULT NULL,
  `auth_maskedPan` varchar(190) DEFAULT NULL,
  `auth_expiry` varchar(190) DEFAULT NULL,
  `auth_bankAccountOwner` varchar(190) DEFAULT NULL,
  `auth_bankAccountIBAN` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderWirecardSeamless_EF_OSO`;
CREATE TABLE `object_brick_store_PaymentProviderWirecardSeamless_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_paymentType` varchar(255) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_paymentState` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_gatewyReferenceNumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_SaleInformation_AP`;
CREATE TABLE `object_brick_store_SaleInformation_AP` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `availabilityPieces` double DEFAULT NULL,
  `availabilityType` varchar(190) DEFAULT NULL,
  `condition` varchar(190) DEFAULT NULL,
  `priceInEUR` decimal(10,2) DEFAULT NULL,
  `milage__value` double DEFAULT NULL,
  `milage__unit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_SaleInformation_CAR`;
CREATE TABLE `object_brick_store_SaleInformation_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `availabilityPieces` double DEFAULT NULL,
  `availabilityType` varchar(190) DEFAULT NULL,
  `condition` varchar(190) DEFAULT NULL,
  `priceInEUR` decimal(10,2) DEFAULT NULL,
  `milage__value` double DEFAULT NULL,
  `milage__unit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_Transmission_CAR`;
CREATE TABLE `object_brick_store_Transmission_CAR` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `wheelDrive` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterCategoryMultiselect_EF_FD`;
CREATE TABLE `object_collection_FilterCategoryMultiselect_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `useAndCondition` tinyint(1) DEFAULT NULL,
  `includeParentCategories` tinyint(1) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterCategoryMultiselect_localized_EF_FD`;
CREATE TABLE `object_collection_FilterCategoryMultiselect_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterCategory_EF_FD`;
CREATE TABLE `object_collection_FilterCategory_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `includeParentCategories` tinyint(1) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterCategory_localized_EF_FD`;
CREATE TABLE `object_collection_FilterCategory_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterInputfield_EF_FD`;
CREATE TABLE `object_collection_FilterInputfield_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `preSelect` varchar(255) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterInputfield_localized_EF_FD`;
CREATE TABLE `object_collection_FilterInputfield_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterMultiRelation_EF_FD`;
CREATE TABLE `object_collection_FilterMultiRelation_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `useAndCondition` tinyint(1) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterMultiRelation_localized_EF_FD`;
CREATE TABLE `object_collection_FilterMultiRelation_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterMultiSelectFromMultiSelect_EF_FD`;
CREATE TABLE `object_collection_FilterMultiSelectFromMultiSelect_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `scriptPath` varchar(255) DEFAULT NULL,
  `UseAndCondition` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterMultiSelect_EF_FD`;
CREATE TABLE `object_collection_FilterMultiSelect_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `scriptPath` varchar(255) DEFAULT NULL,
  `UseAndCondition` tinyint(1) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterMultiSelect_localized_EF_FD`;
CREATE TABLE `object_collection_FilterMultiSelect_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterNumberRangeSelection_EF_FD`;
CREATE TABLE `object_collection_FilterNumberRangeSelection_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `ranges__range1#from` double DEFAULT NULL,
  `ranges__range1#to` double DEFAULT NULL,
  `ranges__range2#from` double DEFAULT NULL,
  `ranges__range2#to` double DEFAULT NULL,
  `ranges__range3#from` double DEFAULT NULL,
  `ranges__range3#to` double DEFAULT NULL,
  `ranges__range4#from` double DEFAULT NULL,
  `ranges__range4#to` double DEFAULT NULL,
  `preSelectFrom` double DEFAULT NULL,
  `preSelectTo` double DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterNumberRangeSelection_localized_EF_FD`;
CREATE TABLE `object_collection_FilterNumberRangeSelection_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterNumberRange_EF_FD`;
CREATE TABLE `object_collection_FilterNumberRange_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `rangeFrom` double DEFAULT NULL,
  `rangeTo` double DEFAULT NULL,
  `preSelectFrom` double DEFAULT NULL,
  `preSelectTo` double DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterNumberRange_localized_EF_FD`;
CREATE TABLE `object_collection_FilterNumberRange_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterRelation_EF_FD`;
CREATE TABLE `object_collection_FilterRelation_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `scriptPath` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterRelation_localized_EF_FD`;
CREATE TABLE `object_collection_FilterRelation_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterSelectFromMultiSelect_EF_FD`;
CREATE TABLE `object_collection_FilterSelectFromMultiSelect_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `scriptPath` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterSelectFromMultiSelect_localized_EF_FD`;
CREATE TABLE `object_collection_FilterSelectFromMultiSelect_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterSelect_EF_FD`;
CREATE TABLE `object_collection_FilterSelect_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  `scriptPath` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_FilterSelect_localized_EF_FD`;
CREATE TABLE `object_collection_FilterSelect_localized_EF_FD` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_NewsCars_NE`;
CREATE TABLE `object_collection_NewsCars_NE` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_NewsCars_localized_NE`;
CREATE TABLE `object_collection_NewsCars_localized_NE` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_NewsLinks_NE`;
CREATE TABLE `object_collection_NewsLinks_NE` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `links` longtext,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_NewsLinks_localized_NE`;
CREATE TABLE `object_collection_NewsLinks_localized_NE` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_NewsText_NE`;
CREATE TABLE `object_collection_NewsText_NE` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_NewsText_localized_NE`;
CREATE TABLE `object_collection_NewsText_localized_NE` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `text` longtext,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_OrderByFields_EF_FD`;
CREATE TABLE `object_collection_OrderByFields_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field` varchar(190) DEFAULT NULL,
  `direction` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_OrderPriceModifications_EF_OSO`;
CREATE TABLE `object_collection_OrderPriceModifications_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `netAmount` decimal(19,4) DEFAULT NULL,
  `amount` decimal(19,4) DEFAULT NULL,
  `pricingRuleId` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_PaymentInfo_EF_OSO`;
CREATE TABLE `object_collection_PaymentInfo_EF_OSO` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `paymentStart` bigint(20) DEFAULT NULL,
  `paymentFinish` bigint(20) DEFAULT NULL,
  `paymentReference` varchar(255) DEFAULT NULL,
  `paymentState` varchar(190) DEFAULT NULL,
  `internalPaymentId` varchar(255) DEFAULT NULL,
  `message` longtext,
  `providerData` longtext,
  `provider_qpay_amount` varchar(255) DEFAULT NULL,
  `provider_qpay_paymentType` varchar(255) DEFAULT NULL,
  `provider_qpay_paymentState` varchar(255) DEFAULT NULL,
  `provider_datatrans_acqAuthorizationCode` varchar(255) DEFAULT NULL,
  `provider_datatrans_amount` varchar(255) DEFAULT NULL,
  `provider_datatrans_responseXML` longtext,
  `provider_paypal_amount` varchar(255) DEFAULT NULL,
  `provider_paypal_TransactionType` varchar(255) DEFAULT NULL,
  `provider_paypal_PaymentType` varchar(255) DEFAULT NULL,
  `provider_payu_amount` varchar(255) DEFAULT NULL,
  `provider_payu_PaymentType` varchar(255) DEFAULT NULL,
  `provider_ogone_amount` varchar(255) DEFAULT NULL,
  `provider_ogone_PaymentId` varchar(255) DEFAULT NULL,
  `provider_ogone_PaymentType` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_PricingRule_EF_OSOI`;
CREATE TABLE `object_collection_PricingRule_EF_OSOI` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `ruleId` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_PricingRule_localized_EF_OSOI`;
CREATE TABLE `object_collection_PricingRule_localized_EF_OSOI` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_SimilarityField_EF_FD`;
CREATE TABLE `object_collection_SimilarityField_EF_FD` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `field` varchar(190) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_TaxEntry_EF_OSTC`;
CREATE TABLE `object_collection_TaxEntry_EF_OSTC` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `percent` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_TaxEntry_localized_EF_OSTC`;
CREATE TABLE `object_collection_TaxEntry_localized_EF_OSTC` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_VoucherTokenTypePattern_EF_OSVS`;
CREATE TABLE `object_collection_VoucherTokenTypePattern_EF_OSVS` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `count` bigint(20) DEFAULT NULL,
  `prefix` varchar(255) DEFAULT NULL,
  `length` bigint(20) DEFAULT NULL,
  `characterType` varchar(190) DEFAULT NULL,
  `separator` varchar(255) DEFAULT NULL,
  `separatorCount` decimal(64,0) DEFAULT NULL,
  `allowOncePerCart` tinyint(1) DEFAULT NULL,
  `onlyTokenPerCart` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_VoucherTokenTypeSingle_EF_OSVS`;
CREATE TABLE `object_collection_VoucherTokenTypeSingle_EF_OSVS` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `token` varchar(255) DEFAULT NULL,
  `usages` decimal(64,0) DEFAULT NULL,
  `onlyTokenPerCart` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_data_AP`;
CREATE TABLE `object_localized_data_AP` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `nameAddition` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_data_BS`;
CREATE TABLE `object_localized_data_BS` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_data_CA`;
CREATE TABLE `object_localized_data_CA` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  `productNamePart` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_data_CAR`;
CREATE TABLE `object_localized_data_CAR` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_data_EV`;
CREATE TABLE `object_localized_data_EV` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_data_NE`;
CREATE TABLE `object_localized_data_NE` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(190) DEFAULT NULL,
  `shortText` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_AP_de`;
CREATE TABLE `object_localized_query_AP_de` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `nameAddition` varchar(190) DEFAULT NULL,
  `generatedName` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_AP_en`;
CREATE TABLE `object_localized_query_AP_en` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `nameAddition` varchar(190) DEFAULT NULL,
  `generatedName` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_AP_fr`;
CREATE TABLE `object_localized_query_AP_fr` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `nameAddition` varchar(190) DEFAULT NULL,
  `generatedName` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_BS_de`;
CREATE TABLE `object_localized_query_BS_de` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_BS_en`;
CREATE TABLE `object_localized_query_BS_en` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_BS_fr`;
CREATE TABLE `object_localized_query_BS_fr` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_CAR_de`;
CREATE TABLE `object_localized_query_CAR_de` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  `description` longtext,
  `textsAvailable` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_CAR_en`;
CREATE TABLE `object_localized_query_CAR_en` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  `description` longtext,
  `textsAvailable` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_CAR_fr`;
CREATE TABLE `object_localized_query_CAR_fr` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  `description` longtext,
  `textsAvailable` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_CA_de`;
CREATE TABLE `object_localized_query_CA_de` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  `productNamePart` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_CA_en`;
CREATE TABLE `object_localized_query_CA_en` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  `productNamePart` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_CA_fr`;
CREATE TABLE `object_localized_query_CA_fr` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  `productNamePart` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_EV_de`;
CREATE TABLE `object_localized_query_EV_de` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_EV_en`;
CREATE TABLE `object_localized_query_EV_en` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_EV_fr`;
CREATE TABLE `object_localized_query_EV_fr` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_NE_de`;
CREATE TABLE `object_localized_query_NE_de` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(190) DEFAULT NULL,
  `shortText` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_NE_en`;
CREATE TABLE `object_localized_query_NE_en` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(190) DEFAULT NULL,
  `shortText` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_NE_fr`;
CREATE TABLE `object_localized_query_NE_fr` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `title` varchar(190) DEFAULT NULL,
  `shortText` longtext,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_metadata_CU`;
CREATE TABLE `object_metadata_CU` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(71) NOT NULL,
  `column` varchar(190) NOT NULL,
  `data` text,
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`o_id`,`dest_id`,`type`,`fieldname`,`column`,`ownertype`,`ownername`,`position`,`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `column` (`column`),
  KEY `ownertype` (`ownertype`),
  KEY `ownername` (`ownername`),
  KEY `position` (`position`),
  KEY `index` (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_1`;
CREATE TABLE `object_query_1` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT '1',
  `oo_className` varchar(255) DEFAULT 'CustomerSegmentGroup',
  `name` varchar(255) DEFAULT NULL,
  `reference` varchar(190) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
  `showAsFilter` tinyint(1) DEFAULT NULL,
  `filterSortOrder` bigint(20) DEFAULT NULL,
  `exportNewsletterProvider` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_showAsFilter` (`showAsFilter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_2`;
CREATE TABLE `object_query_2` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT '2',
  `oo_className` varchar(255) DEFAULT 'CustomerSegment',
  `name` varchar(255) DEFAULT NULL,
  `group__id` int(11) DEFAULT NULL,
  `group__type` enum('document','asset','object') DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
  `useAsTargetGroup` tinyint(1) DEFAULT NULL,
  `targetGroup` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_3`;
CREATE TABLE `object_query_3` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT '3',
  `oo_className` varchar(255) DEFAULT 'SsoIdentity',
  `provider` varchar(190) DEFAULT NULL,
  `identifier` varchar(190) DEFAULT NULL,
  `profileData` longtext,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_provider` (`provider`),
  KEY `p_index_identifier` (`identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_4`;
CREATE TABLE `object_query_4` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT '4',
  `oo_className` varchar(255) DEFAULT 'TermSegmentBuilderDefinition',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_5`;
CREATE TABLE `object_query_5` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT '5',
  `oo_className` varchar(255) DEFAULT 'LinkActivityDefinition',
  `code` varchar(190) DEFAULT NULL,
  `attributeType` varchar(190) DEFAULT NULL,
  `label` varchar(190) DEFAULT NULL,
  `link` text,
  `active` varchar(190) DEFAULT NULL,
  `utm_source` varchar(190) DEFAULT NULL,
  `utm_medium` varchar(190) DEFAULT NULL,
  `utm_campaign` varchar(190) DEFAULT NULL,
  `utm_term` varchar(190) DEFAULT NULL,
  `utm_content` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_AP`;
CREATE TABLE `object_query_AP` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'AP',
  `oo_className` varchar(255) DEFAULT 'AccessoryPart',
  `compatibleTo` text,
  `image__image` int(11) DEFAULT NULL,
  `image__hotspots` text,
  `manufacturer__id` int(11) DEFAULT NULL,
  `manufacturer__type` enum('document','asset','object') DEFAULT NULL,
  `series__id` int(11) DEFAULT NULL,
  `series__type` enum('document','asset','object') DEFAULT NULL,
  `mainCategory__id` int(11) DEFAULT NULL,
  `mainCategory__type` enum('document','asset','object') DEFAULT NULL,
  `additionalCategories` text,
  `erpNumber` varchar(190) DEFAULT NULL,
  `categoryCode` varchar(190) DEFAULT NULL,
  `owner` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_BS`;
CREATE TABLE `object_query_BS` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'BS',
  `oo_className` varchar(255) DEFAULT 'BodyStyle',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_CA`;
CREATE TABLE `object_query_CA` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'CA',
  `oo_className` varchar(255) DEFAULT 'Category',
  `cars` text,
  `filterDefinition__id` int(11) DEFAULT NULL,
  `filterDefinition__type` enum('document','asset','object') DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_CAR`;
CREATE TABLE `object_query_CAR` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'CAR',
  `oo_className` varchar(255) DEFAULT 'Car',
  `series` varchar(190) DEFAULT NULL,
  `productionYear` bigint(20) DEFAULT NULL,
  `color` text,
  `gallery__images` text,
  `gallery__hotspots` text,
  `manufacturer__id` int(11) DEFAULT NULL,
  `manufacturer__type` enum('document','asset','object') DEFAULT NULL,
  `bodyStyle__id` int(11) DEFAULT NULL,
  `bodyStyle__type` enum('document','asset','object') DEFAULT NULL,
  `country` varchar(190) DEFAULT NULL,
  `genericImages__images` text,
  `genericImages__hotspots` text,
  `carClass` varchar(190) DEFAULT NULL,
  `categories` text,
  `location__longitude` double DEFAULT NULL,
  `location__latitude` double DEFAULT NULL,
  `objectType` varchar(190) DEFAULT NULL,
  `attributesAvailable` varchar(190) DEFAULT NULL,
  `saleInformationAvailable` varchar(190) DEFAULT NULL,
  `imagesAvailable` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_CU`;
CREATE TABLE `object_query_CU` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'CU',
  `oo_className` varchar(255) DEFAULT 'Customer',
  `active` tinyint(1) DEFAULT NULL,
  `gender` varchar(190) DEFAULT NULL,
  `firstname` varchar(190) DEFAULT NULL,
  `lastname` varchar(190) DEFAULT NULL,
  `email` varchar(190) DEFAULT NULL,
  `street` varchar(190) DEFAULT NULL,
  `zip` varchar(190) DEFAULT NULL,
  `city` varchar(190) DEFAULT NULL,
  `countryCode` varchar(190) DEFAULT NULL,
  `phone` varchar(190) DEFAULT NULL,
  `idEncoded` varchar(190) DEFAULT NULL,
  `manualSegments` text,
  `calculatedSegments` text,
  `password` varchar(190) DEFAULT NULL,
  `ssoIdentities` text,
  `company` varchar(190) DEFAULT NULL,
  `passwordRecoveryToken` varchar(190) DEFAULT NULL,
  `passwordRecoveryTokenDate` bigint(20) DEFAULT NULL,
  `customerLanguage` varchar(190) DEFAULT NULL,
  `newsletter` tinyint(1) DEFAULT NULL,
  `newsletterConfirmed` tinyint(1) DEFAULT NULL,
  `profiling` tinyint(1) DEFAULT NULL,
  `newsletterConfirmToken` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_idEncoded` (`idEncoded`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_FD`;
CREATE TABLE `object_query_EF_FD` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_FD',
  `oo_className` varchar(255) DEFAULT 'FilterDefinition',
  `pageLimit` double DEFAULT NULL,
  `defaultOrderByInheritance` varchar(190) DEFAULT NULL,
  `orderByAsc` longtext,
  `orderByDesc` longtext,
  `ajaxReload` tinyint(1) DEFAULT NULL,
  `infiniteScroll` tinyint(1) DEFAULT NULL,
  `limitOnFirstLoad` double DEFAULT NULL,
  `conditionsInheritance` varchar(190) DEFAULT NULL,
  `filtersInheritance` varchar(190) DEFAULT NULL,
  `crossSellingCategory__id` int(11) DEFAULT NULL,
  `crossSellingCategory__type` enum('document','asset','object') DEFAULT NULL,
  `similarityFieldsInheritance` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_OSO`;
CREATE TABLE `object_query_EF_OSO` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_OSO',
  `oo_className` varchar(255) DEFAULT 'OnlineShopOrder',
  `ordernumber` varchar(255) DEFAULT NULL,
  `orderState` varchar(190) DEFAULT NULL,
  `orderdate` bigint(20) DEFAULT NULL,
  `items` text,
  `comment` longtext,
  `customerOrderData` varchar(255) DEFAULT NULL,
  `voucherTokens` text,
  `giftItems` text,
  `subTotalNetPrice` decimal(19,4) DEFAULT NULL,
  `subTotalPrice` decimal(19,4) DEFAULT NULL,
  `totalNetPrice` decimal(19,4) DEFAULT NULL,
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `taxInfo` longtext,
  `currency` varchar(255) DEFAULT NULL,
  `cartId` varchar(190) DEFAULT NULL,
  `customer__id` int(11) DEFAULT NULL,
  `customer__type` enum('document','asset','object') DEFAULT NULL,
  `customerFirstname` varchar(255) DEFAULT NULL,
  `customerLastname` varchar(255) DEFAULT NULL,
  `customerCompany` varchar(255) DEFAULT NULL,
  `customerStreet` varchar(255) DEFAULT NULL,
  `customerZip` varchar(255) DEFAULT NULL,
  `customerCity` varchar(255) DEFAULT NULL,
  `customerCountry` varchar(190) DEFAULT NULL,
  `customerEmail` varchar(255) DEFAULT NULL,
  `deliveryFirstname` varchar(255) DEFAULT NULL,
  `deliveryLastname` varchar(255) DEFAULT NULL,
  `deliveryCompany` varchar(255) DEFAULT NULL,
  `deliveryStreet` varchar(255) DEFAULT NULL,
  `deliveryZip` varchar(255) DEFAULT NULL,
  `deliveryCity` varchar(255) DEFAULT NULL,
  `deliveryCountry` varchar(190) DEFAULT NULL,
  `paymentReference` varchar(255) DEFAULT NULL,
  `successorOrder__id` int(11) DEFAULT NULL,
  `successorOrder__type` enum('document','asset','object') DEFAULT NULL,
  `cartHash` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_cartId` (`cartId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_OSOI`;
CREATE TABLE `object_query_EF_OSOI` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_OSOI',
  `oo_className` varchar(255) DEFAULT 'OnlineShopOrderItem',
  `orderState` varchar(190) DEFAULT NULL,
  `product__id` int(11) DEFAULT NULL,
  `product__type` enum('document','asset','object') DEFAULT NULL,
  `productNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `totalNetPrice` double DEFAULT NULL,
  `totalPrice` double DEFAULT NULL,
  `taxInfo` longtext,
  `comment` longtext,
  `subItems` text,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_OSTC`;
CREATE TABLE `object_query_EF_OSTC` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_OSTC',
  `oo_className` varchar(255) DEFAULT 'OnlineShopTaxClass',
  `taxEntryCombinationType` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_OSVS`;
CREATE TABLE `object_query_EF_OSVS` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_OSVS',
  `oo_className` varchar(255) DEFAULT 'OnlineShopVoucherSeries',
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_OSVT`;
CREATE TABLE `object_query_EF_OSVT` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_OSVT',
  `oo_className` varchar(255) DEFAULT 'OnlineShopVoucherToken',
  `tokenId` double DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `voucherSeries__id` int(11) DEFAULT NULL,
  `voucherSeries__type` enum('document','asset','object') DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_OTCP`;
CREATE TABLE `object_query_EF_OTCP` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_OTCP',
  `oo_className` varchar(255) DEFAULT 'OfferToolCustomProduct',
  `OSproductNumber` varchar(255) DEFAULT NULL,
  `OSName` varchar(255) DEFAULT NULL,
  `productGroup` varchar(190) DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_OTO`;
CREATE TABLE `object_query_EF_OTO` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_OTO',
  `oo_className` varchar(255) DEFAULT 'OfferToolOffer',
  `offernumber` varchar(255) DEFAULT NULL,
  `dateCreated` bigint(20) DEFAULT NULL,
  `dateValidUntil` bigint(20) DEFAULT NULL,
  `totalPriceBeforeDiscount` decimal(19,4) DEFAULT NULL,
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `discountType` varchar(190) DEFAULT NULL,
  `discount` decimal(19,4) DEFAULT NULL,
  `cartId` varchar(255) DEFAULT NULL,
  `items` text,
  `customItems` text,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EF_OTOI`;
CREATE TABLE `object_query_EF_OTOI` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EF_OTOI',
  `oo_className` varchar(255) DEFAULT 'OfferToolOfferItem',
  `product__id` int(11) DEFAULT NULL,
  `product__type` enum('document','asset','object') DEFAULT NULL,
  `productNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `originalTotalPrice` decimal(19,4) DEFAULT NULL,
  `DiscountType` varchar(190) DEFAULT NULL,
  `discount` decimal(19,4) DEFAULT NULL,
  `finalTotalPrice` decimal(19,4) DEFAULT NULL,
  `subItems` text,
  `comment` longtext,
  `cartItemKey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_EV`;
CREATE TABLE `object_query_EV` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'EV',
  `oo_className` varchar(255) DEFAULT 'Event',
  `tags` text,
  `locationAddress` longtext,
  `locationMap__longitude` double DEFAULT NULL,
  `locationMap__latitude` double DEFAULT NULL,
  `fromDate` bigint(20) DEFAULT NULL,
  `toDate` bigint(20) DEFAULT NULL,
  `mainImage` int(11) DEFAULT NULL,
  `video` text,
  `images__images` text,
  `images__hotspots` text,
  `contactName` varchar(255) DEFAULT NULL,
  `contactPhone` varchar(190) DEFAULT NULL,
  `contactEmail` varchar(190) DEFAULT NULL,
  `contactAddress` longtext,
  `cars` text,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_MA`;
CREATE TABLE `object_query_MA` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'MA',
  `oo_className` varchar(255) DEFAULT 'Manufacturer',
  `name` varchar(190) DEFAULT NULL,
  `logo` int(11) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_NE`;
CREATE TABLE `object_query_NE` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` varchar(50) DEFAULT 'NE',
  `oo_className` varchar(255) DEFAULT 'News',
  `date` bigint(20) DEFAULT NULL,
  `gallery__images` text,
  `gallery__hotspots` text,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_1`;
CREATE TABLE `object_relations_1` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_2`;
CREATE TABLE `object_relations_2` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_3`;
CREATE TABLE `object_relations_3` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_4`;
CREATE TABLE `object_relations_4` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_5`;
CREATE TABLE `object_relations_5` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_AP`;
CREATE TABLE `object_relations_AP` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_BS`;
CREATE TABLE `object_relations_BS` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_CA`;
CREATE TABLE `object_relations_CA` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_CAR`;
CREATE TABLE `object_relations_CAR` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_CU`;
CREATE TABLE `object_relations_CU` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_FD`;
CREATE TABLE `object_relations_EF_FD` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_OSO`;
CREATE TABLE `object_relations_EF_OSO` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_OSOI`;
CREATE TABLE `object_relations_EF_OSOI` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_OSTC`;
CREATE TABLE `object_relations_EF_OSTC` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_OSVS`;
CREATE TABLE `object_relations_EF_OSVS` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_OSVT`;
CREATE TABLE `object_relations_EF_OSVT` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_OTCP`;
CREATE TABLE `object_relations_EF_OTCP` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_OTO`;
CREATE TABLE `object_relations_EF_OTO` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EF_OTOI`;
CREATE TABLE `object_relations_EF_OTOI` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_EV`;
CREATE TABLE `object_relations_EV` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_MA`;
CREATE TABLE `object_relations_MA` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_NE`;
CREATE TABLE `object_relations_NE` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_1`;
CREATE TABLE `object_store_1` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `reference` varchar(190) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
  `showAsFilter` tinyint(1) DEFAULT NULL,
  `filterSortOrder` bigint(20) DEFAULT NULL,
  `exportNewsletterProvider` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_showAsFilter` (`showAsFilter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_2`;
CREATE TABLE `object_store_2` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
  `useAsTargetGroup` tinyint(1) DEFAULT NULL,
  `targetGroup` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_3`;
CREATE TABLE `object_store_3` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(190) DEFAULT NULL,
  `identifier` varchar(190) DEFAULT NULL,
  `profileData` longtext,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_provider` (`provider`),
  KEY `p_index_identifier` (`identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_4`;
CREATE TABLE `object_store_4` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(190) DEFAULT NULL,
  `terms` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_5`;
CREATE TABLE `object_store_5` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(190) DEFAULT NULL,
  `attributeType` varchar(190) DEFAULT NULL,
  `label` varchar(190) DEFAULT NULL,
  `link` text,
  `active` varchar(190) DEFAULT NULL,
  `utm_source` varchar(190) DEFAULT NULL,
  `utm_medium` varchar(190) DEFAULT NULL,
  `utm_campaign` varchar(190) DEFAULT NULL,
  `utm_term` varchar(190) DEFAULT NULL,
  `utm_content` varchar(190) DEFAULT NULL,
  `attributes` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_AP`;
CREATE TABLE `object_store_AP` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `image__image` int(11) DEFAULT NULL,
  `image__hotspots` text,
  `erpNumber` varchar(190) DEFAULT NULL,
  `categoryCode` varchar(190) DEFAULT NULL,
  `owner` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_BS`;
CREATE TABLE `object_store_BS` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_CA`;
CREATE TABLE `object_store_CA` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_CAR`;
CREATE TABLE `object_store_CAR` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `series` varchar(190) DEFAULT NULL,
  `productionYear` bigint(20) DEFAULT NULL,
  `color` text,
  `gallery__images` text,
  `gallery__hotspots` text,
  `country` varchar(190) DEFAULT NULL,
  `genericImages__images` text,
  `genericImages__hotspots` text,
  `carClass` varchar(190) DEFAULT NULL,
  `location__longitude` double DEFAULT NULL,
  `location__latitude` double DEFAULT NULL,
  `objectType` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_CU`;
CREATE TABLE `object_store_CU` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) DEFAULT NULL,
  `gender` varchar(190) DEFAULT NULL,
  `firstname` varchar(190) DEFAULT NULL,
  `lastname` varchar(190) DEFAULT NULL,
  `email` varchar(190) DEFAULT NULL,
  `street` varchar(190) DEFAULT NULL,
  `zip` varchar(190) DEFAULT NULL,
  `city` varchar(190) DEFAULT NULL,
  `countryCode` varchar(190) DEFAULT NULL,
  `phone` varchar(190) DEFAULT NULL,
  `idEncoded` varchar(190) DEFAULT NULL,
  `password` varchar(190) DEFAULT NULL,
  `company` varchar(190) DEFAULT NULL,
  `passwordRecoveryToken` varchar(190) DEFAULT NULL,
  `passwordRecoveryTokenDate` bigint(20) DEFAULT NULL,
  `customerLanguage` varchar(190) DEFAULT NULL,
  `newsletter__consent` tinyint(1) DEFAULT NULL,
  `newsletter__note` int(11) DEFAULT NULL,
  `newsletterConfirmed` tinyint(1) DEFAULT NULL,
  `profiling__consent` tinyint(1) DEFAULT NULL,
  `profiling__note` int(11) DEFAULT NULL,
  `newsletterConfirmToken` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_idEncoded` (`idEncoded`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_FD`;
CREATE TABLE `object_store_EF_FD` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `pageLimit` double DEFAULT NULL,
  `defaultOrderByInheritance` varchar(190) DEFAULT NULL,
  `orderByAsc` longtext,
  `orderByDesc` longtext,
  `ajaxReload` tinyint(1) DEFAULT NULL,
  `infiniteScroll` tinyint(1) DEFAULT NULL,
  `limitOnFirstLoad` double DEFAULT NULL,
  `conditionsInheritance` varchar(190) DEFAULT NULL,
  `filtersInheritance` varchar(190) DEFAULT NULL,
  `similarityFieldsInheritance` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_OSO`;
CREATE TABLE `object_store_EF_OSO` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `ordernumber` varchar(255) DEFAULT NULL,
  `orderState` varchar(190) DEFAULT NULL,
  `orderdate` bigint(20) DEFAULT NULL,
  `comment` longtext,
  `customerOrderData` varchar(255) DEFAULT NULL,
  `subTotalNetPrice` decimal(19,4) DEFAULT NULL,
  `subTotalPrice` decimal(19,4) DEFAULT NULL,
  `totalNetPrice` decimal(19,4) DEFAULT NULL,
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `taxInfo` longtext,
  `currency` varchar(255) DEFAULT NULL,
  `cartId` varchar(190) DEFAULT NULL,
  `customerFirstname` varchar(255) DEFAULT NULL,
  `customerLastname` varchar(255) DEFAULT NULL,
  `customerCompany` varchar(255) DEFAULT NULL,
  `customerStreet` varchar(255) DEFAULT NULL,
  `customerZip` varchar(255) DEFAULT NULL,
  `customerCity` varchar(255) DEFAULT NULL,
  `customerCountry` varchar(190) DEFAULT NULL,
  `customerEmail` varchar(255) DEFAULT NULL,
  `deliveryFirstname` varchar(255) DEFAULT NULL,
  `deliveryLastname` varchar(255) DEFAULT NULL,
  `deliveryCompany` varchar(255) DEFAULT NULL,
  `deliveryStreet` varchar(255) DEFAULT NULL,
  `deliveryZip` varchar(255) DEFAULT NULL,
  `deliveryCity` varchar(255) DEFAULT NULL,
  `deliveryCountry` varchar(190) DEFAULT NULL,
  `paymentReference` varchar(255) DEFAULT NULL,
  `cartHash` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_cartId` (`cartId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_OSOI`;
CREATE TABLE `object_store_EF_OSOI` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `orderState` varchar(190) DEFAULT NULL,
  `productNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `totalNetPrice` double DEFAULT NULL,
  `totalPrice` double DEFAULT NULL,
  `taxInfo` longtext,
  `comment` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_OSTC`;
CREATE TABLE `object_store_EF_OSTC` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `taxEntryCombinationType` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_OSVS`;
CREATE TABLE `object_store_EF_OSVS` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_OSVT`;
CREATE TABLE `object_store_EF_OSVT` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `tokenId` double DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_OTCP`;
CREATE TABLE `object_store_EF_OTCP` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `OSproductNumber` varchar(255) DEFAULT NULL,
  `OSName` varchar(255) DEFAULT NULL,
  `productGroup` varchar(190) DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_OTO`;
CREATE TABLE `object_store_EF_OTO` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `offernumber` varchar(255) DEFAULT NULL,
  `dateCreated` bigint(20) DEFAULT NULL,
  `dateValidUntil` bigint(20) DEFAULT NULL,
  `totalPriceBeforeDiscount` decimal(19,4) DEFAULT NULL,
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `discountType` varchar(190) DEFAULT NULL,
  `discount` decimal(19,4) DEFAULT NULL,
  `cartId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EF_OTOI`;
CREATE TABLE `object_store_EF_OTOI` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `productNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `originalTotalPrice` decimal(19,4) DEFAULT NULL,
  `DiscountType` varchar(190) DEFAULT NULL,
  `discount` decimal(19,4) DEFAULT NULL,
  `finalTotalPrice` decimal(19,4) DEFAULT NULL,
  `comment` longtext,
  `cartItemKey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_EV`;
CREATE TABLE `object_store_EV` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `tags` text,
  `locationAddress` longtext,
  `locationMap__longitude` double DEFAULT NULL,
  `locationMap__latitude` double DEFAULT NULL,
  `fromDate` bigint(20) DEFAULT NULL,
  `toDate` bigint(20) DEFAULT NULL,
  `mainImage` int(11) DEFAULT NULL,
  `video` text,
  `images__images` text,
  `images__hotspots` text,
  `contactName` varchar(255) DEFAULT NULL,
  `contactPhone` varchar(190) DEFAULT NULL,
  `contactEmail` varchar(190) DEFAULT NULL,
  `contactAddress` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_MA`;
CREATE TABLE `object_store_MA` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(190) DEFAULT NULL,
  `logo` int(11) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_NE`;
CREATE TABLE `object_store_NE` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `date` bigint(20) DEFAULT NULL,
  `gallery__images` text,
  `gallery__hotspots` text,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `pimcore_migrations`;
CREATE TABLE `pimcore_migrations` (
  `migration_set` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `migrated_at` datetime NOT NULL,
  PRIMARY KEY (`migration_set`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS `plugin_cmf_actiontrigger_actions`;
CREATE TABLE `plugin_cmf_actiontrigger_actions` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ruleId` int(20) unsigned NOT NULL,
  `actionDelay` int(20) unsigned NOT NULL,
  `implementationClass` varchar(255) NOT NULL,
  `options` text,
  `creationDate` bigint(20) NOT NULL,
  `modificationDate` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ruleId` (`ruleId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_actiontrigger_queue`;
CREATE TABLE `plugin_cmf_actiontrigger_queue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customerId` int(11) unsigned NOT NULL,
  `actionDate` bigint(20) unsigned DEFAULT NULL,
  `actionId` int(11) unsigned DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  `environment` text,
  PRIMARY KEY (`id`),
  KEY `customerId` (`customerId`),
  KEY `actionId` (`actionId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_actiontrigger_rules`;
CREATE TABLE `plugin_cmf_actiontrigger_rules` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `trigger` text COMMENT 'configuration of triggers',
  `condition` text COMMENT 'configuration of conditions',
  `creationDate` int(11) NOT NULL,
  `modificationDate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `active` (`active`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_activities`;
CREATE TABLE `plugin_cmf_activities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customerId` int(11) unsigned NOT NULL,
  `activityDate` bigint(20) unsigned DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `implementationClass` varchar(255) NOT NULL,
  `o_id` int(11) unsigned DEFAULT NULL,
  `a_id` varchar(255) DEFAULT NULL,
  `attributes` blob,
  `md5` char(32) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customerId` (`customerId`),
  KEY `o_id` (`o_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_activities_metadata`;
CREATE TABLE `plugin_cmf_activities_metadata` (
  `activityId` int(20) NOT NULL,
  `key` varchar(150) COLLATE utf8_bin NOT NULL,
  `data` longtext COLLATE utf8_bin,
  PRIMARY KEY (`activityId`,`key`),
  KEY `activityId` (`activityId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `plugin_cmf_customer_filter_definition`;
CREATE TABLE `plugin_cmf_customer_filter_definition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ownerId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `definition` text NOT NULL,
  `allowedUserIds` text,
  `readOnly` bit(1) DEFAULT b'0',
  `shortcutAvailable` bit(1) DEFAULT b'0',
  `creationDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `modificationDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_deletions`;
CREATE TABLE `plugin_cmf_deletions` (
  `id` int(11) unsigned NOT NULL,
  `entityType` char(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  KEY `type` (`entityType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_duplicates_false_positives`;
CREATE TABLE `plugin_cmf_duplicates_false_positives` (
  `row1` text NOT NULL,
  `row2` text NOT NULL,
  `row1Details` text NOT NULL,
  `row2Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_duplicatesindex`;
CREATE TABLE `plugin_cmf_duplicatesindex` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `duplicateData` text NOT NULL,
  `duplicateDataMd5` varchar(32) DEFAULT NULL,
  `fieldCombination` char(255) NOT NULL DEFAULT '',
  `fieldCombinationCrc` int(11) unsigned NOT NULL,
  `metaphone` varchar(50) DEFAULT NULL,
  `soundex` varchar(50) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `duplicateDataCrc` (`duplicateDataMd5`),
  KEY `fieldCombination` (`fieldCombination`),
  KEY `soundex` (`soundex`),
  KEY `metaphone` (`metaphone`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_duplicatesindex_customers`;
CREATE TABLE `plugin_cmf_duplicatesindex_customers` (
  `duplicate_id` int(11) unsigned NOT NULL,
  `customer_id` int(11) unsigned NOT NULL,
  KEY `duplicate_id` (`duplicate_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_newsletter_queue`;
CREATE TABLE `plugin_cmf_newsletter_queue` (
  `customerId` int(11) unsigned NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `operation` varchar(20) DEFAULT NULL,
  `modificationDate` bigint(20) DEFAULT NULL,
  UNIQUE KEY `customerId` (`customerId`),
  KEY `operation` (`operation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_potential_duplicates`;
CREATE TABLE `plugin_cmf_potential_duplicates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `duplicateCustomerIds` varchar(255) NOT NULL DEFAULT '',
  `fieldCombinations` text NOT NULL,
  `declined` tinyint(1) DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `duplicateIds` (`duplicateCustomerIds`),
  KEY `declined` (`declined`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_segment_assignment`;
CREATE TABLE `plugin_cmf_segment_assignment` (
  `elementId` int(11) NOT NULL,
  `elementType` enum('document','asset','object') NOT NULL,
  `segments` text,
  `breaksInheritance` tinyint(4) DEFAULT NULL,
  `inPreparation` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`elementId`,`elementType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `plugin_cmf_segment_assignment_index`;
CREATE TABLE `plugin_cmf_segment_assignment_index` (
  `elementId` int(11) NOT NULL,
  `elementType` enum('document','asset','object') NOT NULL,
  `segmentId` int(11) NOT NULL,
  PRIMARY KEY (`elementId`,`elementType`,`segmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `plugin_cmf_segment_assignment_queue`;
CREATE TABLE `plugin_cmf_segment_assignment_queue` (
  `elementId` int(11) NOT NULL,
  `elementType` enum('document','asset','object') NOT NULL,
  PRIMARY KEY (`elementId`,`elementType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `plugin_cmf_segmentbuilder_changes_queue`;
CREATE TABLE `plugin_cmf_segmentbuilder_changes_queue` (
  `customerId` int(11) unsigned NOT NULL,
  UNIQUE KEY `customerId` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_sequence_numbers`;
CREATE TABLE `plugin_cmf_sequence_numbers` (
  `name` char(50) NOT NULL,
  `number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_datahub_workspaces_asset`;
CREATE TABLE `plugin_datahub_workspaces_asset` (
  `cid` int(11) unsigned NOT NULL DEFAULT '0',
  `cpath` varchar(765) CHARACTER SET utf8 DEFAULT NULL,
  `configuration` varchar(50) NOT NULL DEFAULT '0',
  `create` tinyint(1) unsigned DEFAULT '0',
  `read` tinyint(1) unsigned DEFAULT '0',
  `update` tinyint(1) unsigned DEFAULT '0',
  `delete` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`cid`,`configuration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `plugin_datahub_workspaces_document`;
CREATE TABLE `plugin_datahub_workspaces_document` (
  `cid` int(11) unsigned NOT NULL DEFAULT '0',
  `cpath` varchar(765) CHARACTER SET utf8 DEFAULT NULL,
  `configuration` varchar(50) NOT NULL DEFAULT '0',
  `create` tinyint(1) unsigned DEFAULT '0',
  `read` tinyint(1) unsigned DEFAULT '0',
  `update` tinyint(1) unsigned DEFAULT '0',
  `delete` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`cid`,`configuration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `plugin_datahub_workspaces_object`;
CREATE TABLE `plugin_datahub_workspaces_object` (
  `cid` int(11) unsigned NOT NULL DEFAULT '0',
  `cpath` varchar(765) CHARACTER SET utf8 DEFAULT NULL,
  `configuration` varchar(50) NOT NULL DEFAULT '0',
  `create` tinyint(1) unsigned DEFAULT '0',
  `read` tinyint(1) unsigned DEFAULT '0',
  `update` tinyint(1) unsigned DEFAULT '0',
  `delete` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`cid`,`configuration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `shop_productindex`;
CREATE TABLE `shop_productindex` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `o_virtualProductId` int(11) NOT NULL,
  `o_virtualProductActive` tinyint(1) NOT NULL,
  `o_classId` int(11) NOT NULL,
  `o_parentId` int(11) NOT NULL,
  `o_type` varchar(20) NOT NULL,
  `categoryIds` varchar(255) NOT NULL,
  `parentCategoryIds` varchar(255) NOT NULL,
  `priceSystemName` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `inProductList` tinyint(1) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `milage` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `wheelbase` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `carClass` varchar(255) DEFAULT NULL,
  `power` double DEFAULT NULL,
  `manufacturer_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`),
  FULLTEXT KEY `search` (`name`,`manufacturer_name`,`color`,`carClass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `shop_productindex_relations`;
CREATE TABLE `shop_productindex_relations` (
  `src` int(11) NOT NULL,
  `src_virtualProductId` int(11) NOT NULL,
  `dest` int(11) NOT NULL,
  `fieldname` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`src`,`dest`,`fieldname`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

