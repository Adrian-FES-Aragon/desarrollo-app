
DROP SCHEMA IF EXISTS `php_test`;
CREATE SCHEMA IF NOT EXISTS `php_test` DEFAULT CHARACTER SET utf8 collate utf8_spanish2_ci;
USE `php_test`;

CREATE TABLE `usuarios` (
`id` int(99) NOT NULL,
`user` varchar(30) NOT NULL,
`nombre` varchar(300) NOT NULL,
`correo` varchar(300) NOT NULL,
`password` varchar(450) NOT NULL,
`date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`perm` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`,`user`, `nombre`, `correo`, `password`,`date`,`perm`) VALUES
(1, 'root','Gabriel Ore Durán', 'allright@gmail.com', '0000','0000-0-00 00:00:00',1),
(2, 'admin','Alucard Van Hellsing', 'inhisworld@gmail.com', '1111','1998-1-10 00:00:00',2);

ALTER TABLE `usuarios`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
