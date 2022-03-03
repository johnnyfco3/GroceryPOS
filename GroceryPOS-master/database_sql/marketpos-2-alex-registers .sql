-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2020 at 04:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketpos-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `CID` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `cart_purchase` tinyint(1) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart_inprogress`
--

CREATE TABLE `cart_inprogress` (
  `CID` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` double NOT NULL,
  `rewards` float DEFAULT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `email`, `password`, `first_name`, `last_name`, `phone_number`, `rewards`, `street_address`, `city`, `state`, `zip_code`) VALUES
(1, 'johnnyfran20002@gmail.com', 'passwood', 'Johnny', 'Tejada', 6463214487, 33, '10005 Hawk Drive ', 'Queens', 'NY', 12321),
(2, 'tylerherro23@gmail.com', 'password', 'Tyler', 'Herro', 3475436578, 90, '12th Street', 'New York', 'NY', 9874),
(3, 'bronny45@hotmail.com', 'lebron', 'Bronny', 'James', 2124567656, 44, '21 Wood Street', 'Woodhaven', 'VT', 7384),
(4, 'kyrieirving2@hotmail.com', 'kyrie', 'Kyrie', 'Irving', 2123434567, 14, '74 2nd Ave', 'New York', 'NY', 12343),
(6, 'michaelj23@gmail.com', 'jordan', 'Michael', 'Jordan', 2125468796, 44, '14th Street', 'Chicago ', 'IL', 76854),
(7, 'cp3@yahoo.com', 'phzsuns', 'Chris', 'Paul', 8452341004, 0, '346 Broad St', 'Los Angeles', 'CA', 90212);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `employee_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pin_number` int(11) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_id` double DEFAULT NULL,
  `phone_number` double NOT NULL,
  `SSN` double DEFAULT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `company_name` varchar(50) NOT NULL,
  `number_of_stores` varchar(11) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `email`, `password`, `pin_number`, `first_name`, `last_name`, `user_id`, `phone_number`, `SSN`, `street_address`, `city`, `state`, `zip_code`, `start_date`, `company_name`, `number_of_stores`, `user_type`, `customer_id`) VALUES
(1, 'johnnyfran20002@gmail.com', 'passwood', 231, 'Johnny', 'Tejada', 214564056, 6463214487, 756434736, '10005 Hawk Drive', 'Queens', 'NY', 11105, '2020-11-02', 'Walmart', '3', 1, 1),
(2, 'tylerherro23@gmail.com', 'herro', 112, 'Tyler', 'Herro', 435678987, 3475436897, 123456789, '12th Street', 'New York', 'NY', 9873, '2019-07-01', 'Shop Rite', NULL, 2, 2),
(3, 'bronny45@hotmail.com', 'lebron', 112, 'Bronny', 'James', 112323454, 2124568745, 78234325, '21 Wood Street', 'Woodhaven', 'VT', 12321, '2019-03-02', 'Walmart', NULL, 2, 3),
(4, 'usher54@aim.com', 'usher', 555, 'Usher', 'Man', 345432345, 8454342212, 958674345, '76 Cross Street', 'Houston', 'NY', 85743, '2020-12-05', 'Walmart', NULL, 2, NULL),
(5, 'chrisbrown@gmail.com', 'pass', 111, 'Chris', 'Brown', 111111111, 7187654783, 746378273, '19 West Street', 'Denver', 'CL', 43454, '2019-07-03', 'Walmart', NULL, 2, NULL),
(6, 'kyrieirving2@hotmail.com', 'kyrie', 705, 'Kyrie', 'Irving', 123456789, 2129857843, 123456789, '71 2nd Ave', 'New York', 'NY', 12343, '2017-07-03', 'Tops', '4', 1, 4),
(7, 'georgemartin3432@gmail.com', 'mypassword', NULL, 'George', 'Martin', NULL, 2124545434, NULL, '256 97th Street', 'New York', 'NY', 10035, NULL, 'KeyFood', '3', 1, NULL),
(8, 'bobgz@gmail.com', 'secret', 888, 'Bob', 'Gomez', NULL, 8457631279, 764571465, '7 Grand St', 'New Paltz', 'NY', 12561, NULL, 'Walmart', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gift_card`
--

CREATE TABLE `gift_card` (
  `gift_id` int(11) NOT NULL,
  `promo_number` double NOT NULL,
  `card_balance` float NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift_card`
--

INSERT INTO `gift_card` (`gift_id`, `promo_number`, `card_balance`, `ticket_id`, `customer_id`) VALUES
(3, 26576, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `ITID` int(11) NOT NULL,
  `CID` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` int(11) NOT NULL,
  `OTID` int(11) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `stock_amount` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_ticket`
--

CREATE TABLE `orders_ticket` (
  `OTID` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `tax_rate` float DEFAULT NULL,
  `cash` float DEFAULT NULL,
  `credit` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory`
--

CREATE TABLE `product_inventory` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productType` varchar(50) NOT NULL,
  `productSubType` varchar(50) NOT NULL,
  `unit_price` float NOT NULL,
  `cost` float NOT NULL,
  `in_stock` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_inventory`
--

INSERT INTO `product_inventory` (`product_id`, `brand`, `description`, `productName`, `productType`, `productSubType`, `unit_price`, `cost`, `in_stock`, `vendor_id`) VALUES
(1, 'Fat Free', 'Half and Half', 'Dairy Pure', 'dairy', 'milk', 8.99, 6.99, 10, 1),
(2, 'Organic Whole Milk', 'Organic Vitamin D Milk', 'Horizon', 'dairy', 'milk', 10.45, 8.99, 3, 1),
(3, 'Cheddar Sliced Cheese', 'Natural Medium', 'Sargento', 'dairy', 'cheese', 7.89, 5.15, 5, 1),
(4, 'Irish Cheddar', 'Reverse Cheddar Cheese', 'Kerrygold Cheddar', 'dairy', 'cheese', 9.99, 6.99, 65, 1),
(5, 'Organic Banana', '2lbs', 'Dole', 'produce', 'banana', 4.99, 3.45, 56, 1),
(6, 'Strawberries', '1lb package', 'Driscoll\'s', 'produce', 'strawberries', 8.95, 6.99, 45, 1),
(7, 'Red Cherry Tomato', '10.5oz package', 'Cherry', 'produce', 'tomato', 5.59, 3.99, 21, 1),
(8, 'Organic Red Grape Tomatoes', '10 oz package', 'Brandywine', 'produce', 'tomato', 8.99, 5.75, 2, 1),
(9, ' Sht Cuts Grlld Ital Chic Strip', '22oz', 'Perdue', 'poultry', 'chicken ', 7.49, 6.99, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `registers_table`
--

CREATE TABLE `registers_table` (
  `register_id` int(11) NOT NULL,
  `open_total` float NOT NULL,
  `close_total` float DEFAULT NULL,
  `register_num` int(11) NOT NULL,
  `open_emp_id` int(11) NOT NULL,
  `close_emp_id` int(11) DEFAULT NULL,
  `open_time` datetime NOT NULL,
  `close_time` datetime DEFAULT NULL,
  `drop_time` datetime DEFAULT NULL,
  `drop_emp_id` int(11) DEFAULT NULL,
  `drop_total` float DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registers_table`
--

INSERT INTO `registers_table` (`register_id`, `open_total`, `close_total`, `register_num`, `open_emp_id`, `close_emp_id`, `open_time`, `close_time`, `drop_time`, `drop_emp_id`, `drop_total`, `note`) VALUES
(2, 300, 300, 1, 1, 1, '2020-12-02 22:23:15', '2020-12-02 22:37:49', NULL, NULL, NULL, NULL),
(3, 220, 500, 2, 1, 1, '2020-12-02 22:30:11', '2020-12-02 22:37:13', NULL, NULL, NULL, NULL),
(4, 320, NULL, 1, 1, NULL, '2020-12-02 22:52:48', NULL, '2020-12-02 22:52:54', 1, 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report_system`
--

CREATE TABLE `report_system` (
  `report_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `total_sales` int(11) NOT NULL,
  `new_customers` int(11) NOT NULL,
  `total_orders` int(11) NOT NULL,
  `register_id` int(11) DEFAULT NULL,
  `deposited_cash` float NOT NULL,
  `loss` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_system`
--

INSERT INTO `report_system` (`report_id`, `date`, `total_sales`, `new_customers`, `total_orders`, `register_id`, `deposited_cash`, `loss`) VALUES
(1, '2020-11-20', 45, 12, 0, NULL, 0, 0),
(3, '2020-11-21', 1235, 33, 0, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `return_table`
--

CREATE TABLE `return_table` (
  `RTID` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `refunds` float DEFAULT NULL,
  `exchanges` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `SID` int(11) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tax_table`
--

CREATE TABLE `tax_table` (
  `TTID` int(11) NOT NULL,
  `tax_year` year(4) NOT NULL,
  `state_tax` float NOT NULL,
  `county_tax` float NOT NULL,
  `city_rate` float NOT NULL,
  `tax_rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_table`
--

INSERT INTO `tax_table` (`TTID`, `tax_year`, `state_tax`, `county_tax`, `city_rate`, `tax_rate`) VALUES
(1, 2020, 0.04, 0.04, 0.08, 0.08);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_system`
--

CREATE TABLE `ticket_system` (
  `ticket_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `tax_rate` float DEFAULT NULL,
  `cash` float DEFAULT NULL,
  `credit` float DEFAULT NULL,
  `cart_purchase` tinyint(1) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendorinfo`
--

CREATE TABLE `vendorinfo` (
  `vendor_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `phone_number` double NOT NULL,
  `fax_number` double NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendorinfo`
--

INSERT INTO `vendorinfo` (`vendor_id`, `company_name`, `department`, `street_address`, `city`, `state`, `zip_code`, `phone_number`, `fax_number`, `email`) VALUES
(1, 'Krasdale Foods Inc', 'Frozen and Dairy', '400 Food Center Dr', 'Bronx', 'NY', 10474, 7183781100, 9146975200, 'web-inquiries@krasdalefoods.com'),
(2, 'vendor name', 'produce', '12 Some Street', 'Some City', 'CY', 0, 2121111111, 2120000000, 'name@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `cart_inprogress`
--
ALTER TABLE `cart_inprogress`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexes for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD PRIMARY KEY (`gift_id`),
  ADD KEY `ticket_id` (`ticket_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`ITID`),
  ADD KEY `CID` (`CID`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OID`),
  ADD KEY `OTID` (`OTID`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders_ticket`
--
ALTER TABLE `orders_ticket`
  ADD PRIMARY KEY (`OTID`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `registers_table`
--
ALTER TABLE `registers_table`
  ADD PRIMARY KEY (`register_id`),
  ADD KEY `fk_open_emp_id` (`open_emp_id`),
  ADD KEY `fk_close_emp_id` (`close_emp_id`),
  ADD KEY `fk_drop_emp_id` (`drop_emp_id`);

--
-- Indexes for table `report_system`
--
ALTER TABLE `report_system`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `register_id` (`register_id`);

--
-- Indexes for table `return_table`
--
ALTER TABLE `return_table`
  ADD PRIMARY KEY (`RTID`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `tax_table`
--
ALTER TABLE `tax_table`
  ADD PRIMARY KEY (`TTID`);

--
-- Indexes for table `ticket_system`
--
ALTER TABLE `ticket_system`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `cart_inprogress`
--
ALTER TABLE `cart_inprogress`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `gift_card`
--
ALTER TABLE `gift_card`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `ITID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT for table `orders_ticket`
--
ALTER TABLE `orders_ticket`
  MODIFY `OTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `product_inventory`
--
ALTER TABLE `product_inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registers_table`
--
ALTER TABLE `registers_table`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report_system`
--
ALTER TABLE `report_system`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `return_table`
--
ALTER TABLE `return_table`
  MODIFY `RTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_table`
--
ALTER TABLE `tax_table`
  MODIFY `TTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket_system`
--
ALTER TABLE `ticket_system`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `cart_ibfk_5` FOREIGN KEY (`CID`) REFERENCES `cart_inprogress` (`CID`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `cart_inprogress`
--
ALTER TABLE `cart_inprogress`
  ADD CONSTRAINT `cart_inprogress_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_inprogress_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD CONSTRAINT `gift_card_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `gift_card_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `item_list`
--
ALTER TABLE `item_list`
  ADD CONSTRAINT `item_list_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `cart_inprogress` (`CID`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `item_list_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`OTID`) REFERENCES `orders_ticket` (`OTID`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `orders_ticket`
--
ALTER TABLE `orders_ticket`
  ADD CONSTRAINT `orders_ticket_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `orders_ticket_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendorinfo` (`vendor_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD CONSTRAINT `product_inventory_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendorinfo` (`vendor_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `registers_table`
--
ALTER TABLE `registers_table`
  ADD CONSTRAINT `fk_close_emp_id` FOREIGN KEY (`close_emp_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_drop_emp_id` FOREIGN KEY (`drop_emp_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_open_emp_id` FOREIGN KEY (`open_emp_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `report_system`
--
ALTER TABLE `report_system`
  ADD CONSTRAINT `report_system_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `registers_table` (`register_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `return_table`
--
ALTER TABLE `return_table`
  ADD CONSTRAINT `return_table_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `ticket_system`
--
ALTER TABLE `ticket_system`
  ADD CONSTRAINT `ticket_system_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `ticket_system_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
