SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+02:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE Articles (
  id int(11) NOT NULL,
  title varchar(255) NOT NULL,
  content text NOT NULL,
  status enum('draft','publish') NOT NULL,
  created date NOT NULL,
  updated date

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO Articles (id, title, content, status, created) VALUES
(1, 'Mon Premier Article', 'Ice cream sugar plum bear claw. Sweet roll chupa chups cupcake croissant. Muffin dessert danish gummies dessert.', 2, '2020-07-07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
