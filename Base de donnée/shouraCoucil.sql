





CREATE TABLE IF NOT EXISTS `directeur` (
  `idDirecteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `dateNaissance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idDirecteur`)
);



INSERT INTO `directeur` (`idDirecteur`, `nom`, `prenom`, `pseudo`, `password`, `email`, `image`, `dateNaissance`) VALUES
(1, 'directeur', 'directeur', 'directeur', 'directeur', 'directeur@gmail.com', 'default.png', '1993/01/03'),
(20, ':nom', ':prenom', '', ':password', ':email', 'default.png', ':dateNaissance'),
(21, 'jj', 'jj', '', 'jj', 'jj', 'default.png', '12/02/1960'),
(22, 'd', 'ddd', '', 'ddd', 'dddd', 'default.png', 'c'),
(23, '$$$', 'Ã¹Ã¹Ã¹', '', 'b', 'Ã¹Ã¹Ã¹', 'default.png', '12/02/1960'),
(24, 'ahmedXX', 'ahmedXX', '', 'ahmedXX', 'ahmedXX', 'default.png', '12/02/1960'),
(25, 'prof', 'kamal', '', 'xx', 'prof@gmail.com', 'default.png', '12/02/1960'),
(26, 'dd', 'ddd', '', 'd', 'ddddd', 'default.png', '12/03/1960');



CREATE TABLE IF NOT EXISTS `professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `dateNaissance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


INSERT INTO `professeur` (`id`, `nom`, `prenom`, `pseudo`, `password`, `email`, `image`, `dateNaissance`) VALUES
(1, 'prof', 'prof', 'prof', 'prof', 'prof@gmail.com', 'default.png', NULL),
(2, 'taib', 'belghiti', 'taib', '1a1dc91c907325c69271ddf0c944bc72', 'bel@mail.com', 'belghiti.jpg1.jpg', NULL),
(3, 'prof1', 'prof1', 'prof1', '4f5fdb3de5aa701eae2961743a00c01c', 'prof1@gmail.com', 'prof1.jpg', NULL),
(4, 'prof2', 'pro2', 'prof2', 'c52a44b3378c9ef375b7dadecd783921', 'prof1@gmail.com', 'prof1.jpg', NULL),
(5, 'prof3', 'prof3', 'prof3', '1eff3c8299b8fa754815d590badcf98f', 'prof3@gmail.com', 'prof3.jpg', NULL),
(14, 'samir', 'samir', 'samir', '1a1dc91c907325c69271ddf0c944bc72', 'samir.belbel@gmail.com', 'AMAN-logo.jpg', NULL),
(15, 'bourichi', 'adil', 'bourichi', '1a1dc91c907325c69271ddf0c944bc72', 'a.bourichi@gmail.com', 'Delete.png', NULL),
(16, 'sikal', 'nawfal', 'nawfaltio', '1a1dc91c907325c69271ddf0c944bc72', 'nawfal.sikal@gmail.com', 'sikal.jpg', NULL),
(17, 'chougdali', 'khalid', 'chougdali', '794761a765ceca759536a1bf39100142', 'chougdalikhalid@mail.com', '600227_236467183165573_325465325_n.jpg', NULL),
(19, 'ABOUABDELLAH', 'ABDELLAH', 'abouabdellah', 'abouabdellah', 'ABOUABDELLAH@gmail.com', 'DSC_0056.JPG', NULL),
(20, 'prof', 'prof', '', 'prof', 'prof@gmail.com', 'default.png', '12/02/1960'),
(21, 'prof', 'prof', '', 'prof', 'PROF@GMAIL.COM', 'default.png', '12/02/1960'),
(22, 'prof', 'prof', '', 'prof', 'PROF@GMAIL.COM', 'default.png', '12/02/1960'),
(23, 'prof', 'prof', '', 'prof', 'prof@gmail.com', 'default.png', '12/02/1960'),
(24, 'prof', 'prof', '', 'p', 'prof@gmail.com', 'default.png', '12/02/1960'),
(25, 'youssef', 'errafiy', '', '123', 'errafiy.youssef@gmail.com', 'default.png', '12/02/1960');
