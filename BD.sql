
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";





CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `icono` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `menu` (`id`, `menu_id`, `nombre`, `url`, `orden`, `icono`, `created_at`, `updated_at`) VALUES
(1, 0, 'Admin', 'admin/admin', 1, 'fa-cog', '2019-11-29 19:10:09', '2019-11-29 19:28:14'),
(2, 1, 'Menu', 'admin/menu', 2, 'fa-align-justify', '2019-11-29 19:16:04', '2019-11-29 19:28:14'),
(3, 1, 'Menu Rol', 'admin/menu-rol', 3, 'fa-list', '2019-11-29 19:18:00', '2019-11-29 19:28:14'),
(4, 1, 'Permiso', 'admin/permiso', 4, 'fa-list-alt', '2019-11-29 19:19:47', '2019-11-29 19:28:14'),
(5, 1, 'Permiso Rol', 'admin/permiso-rol', 5, 'fa-exchange', '2019-11-29 19:22:43', '2019-11-29 19:28:14'),
(6, 1, 'Roles', 'admin/rol', 6, 'fa-briefcase', '2019-11-29 19:24:45', '2019-11-29 19:28:14'),
(7, 1, 'Usuario', 'admin/usuario', 1, 'fa-users', '2019-11-29 19:26:50', '2019-11-30 03:36:44');
(8, 0, 'Pqrs', 'pqrs/pqrs', 1, 'fa-users', '2019-11-29 19:26:50', '2019-11-30 03:36:44');
(9, 8, 'Peticiones', 'pqrs/peticones', 1, 'fa-users', '2019-11-29 19:26:50', '2019-11-30 03:36:44');
(10, 8,'Quejas', 'pqrs/quejas', 1, 'fa-users', '2019-11-29 19:26:50', '2019-11-30 03:36:44');
(11, 8,'Reclamos', 'pqrs/reclamos', 1, 'fa-users', '2019-11-29 19:26:50', '2019-11-30 03:36:44');
(12, 8,'Sugerencia', 'pqrs/sugerencia', 1, 'fa-users', '2019-11-29 19:26:50', '2019-11-30 03:36:44');


CREATE TABLE `menu_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



INSERT INTO `menu_rol` (`rol_id`, `menu_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7);


CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2019_11_17_183434_crear_tabla_usuario', 1),
(11, '2019_11_17_204902_crear_tabla_rol', 1),
(12, '2019_11_17_210159_crear_tabla_permiso', 1),
(13, '2019_11_17_211117_crear_tabla_usuario_rol', 1),
(14, '2019_11_17_222432_crear_tabla_permiso_rol', 1),
(15, '2019_11_17_224533_crear_tabla_libro', 1),
(16, '2019_11_17_225430_crear_tabla_libro_prestamo', 1),
(17, '2019_11_22_155231_crear_tabla_menu', 1),
(18, '2019_11_22_161230_crear_tabla_menu_rol', 1),
(19, '2019_11_29_030133_modificar_tabla_usuario', 1);


CREATE TABLE `permiso` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



INSERT INTO `permiso` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Realizar PQR', 'realizar-pqr', NULL, NULL),
(2, 'Responder PQR', 'responder-pqr', NULL, NULL),
(3, 'Eliminar PQR', 'eliminar-pqr', NULL, NULL),
(4, 'Listar PQR', 'listar-pqr', NULL, NULL);


CREATE TABLE `permiso_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `permiso_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



INSERT INTO `permiso_rol` (`rol_id`, `permiso_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 3),
(2, 4),
(2, 2);

CREATE TABLE `rol` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `rol` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2019-11-30 01:46:17', NULL),
(2, 'Secreataria', '2019-11-30 01:46:17', NULL),
(3, 'Empleado', '2019-11-30 01:46:17', NULL),
(4, 'Cliente', '2019-11-30 01:46:17', NULL);




CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



INSERT INTO `usuario` (`id`, `usuario`, `password`, `nombre`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$h0kaA2Grr6NSMr6HWh1tGufBA22yYvYj3HbN0nc/75K4T4F4lGQ42', 'Administrador', 'prueban@gmail.com', NULL, NULL),
(2, 'rat', '$2y$10$TXIr3ulzW.frISiI6ZQc0u9OzuvYEsIfr.kiVrOQTe1H5uX4JuIh6', 'Rossvelt', 'rgt90@hotmail.com', '2019-11-30 02:03:16', '2019-11-30 02:03:16'),
(3, 'tuto', '$2y$10$O7of2Hg5epK/d8SAkt7A6uAW3oC.6Ym1DbE0gyqpl.cl8G8YRW5V.', 'Tutorialesvirtuales', 'suporte@tutorialesvirtuales.com', '2019-11-30 02:16:43', '2019-11-30 02:16:43'),
(5, 'sara', '$2y$10$qQZyjLhaXJLsdQH/8Tl5EuVcrzSGoCR1GJGapfcqd/gaPqY0k93dG', 'Sara', 'sara@prueba.com', '2019-11-30 06:01:32', '2019-11-30 06:01:32');



CREATE TABLE `usuario_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



INSERT INTO `usuario_rol` (`rol_id`, `usuario_id`) VALUES
(1, 1),
(2, 2),
(1, 5),
(2, 5),
(3, 3);


ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `menu_rol`
  ADD KEY `fk_menurol_rol` (`rol_id`),
  ADD KEY `fk_menurol_menu` (`menu_id`);


ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `permiso_rol`
  ADD KEY `fk_permisorol_rol` (`rol_id`),
  ADD KEY `fk_permisorol_permiso` (`permiso_id`);


ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rol_nombre_unique` (`nombre`);


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_usuario_unique` (`usuario`),
  ADD UNIQUE KEY `usuario_email_unique` (`email`);


ALTER TABLE `usuario_rol`
  ADD KEY `fk_usuariorol_rol` (`rol_id`),
  ADD KEY `fk_usuariorol_usuario` (`usuario_id`);




ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;


ALTER TABLE `permiso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `rol`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `menu_rol`
  ADD CONSTRAINT `fk_menurol_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_menurol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);


ALTER TABLE `permiso_rol`
  ADD CONSTRAINT `fk_permisorol_permiso` FOREIGN KEY (`permiso_id`) REFERENCES `permiso` (`id`),
  ADD CONSTRAINT `fk_permisorol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);


ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `fk_usuariorol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `fk_usuariorol_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
