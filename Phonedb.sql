CREATE TABLE IF NOT EXISTS `phonelist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `shopname` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `price` int NOT NULL,
  `phone` bigint NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

