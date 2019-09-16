-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2019 at 02:41 PM
-- Server version: 10.1.40-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openload_hackstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(10) NOT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mini_description` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` varchar(4096) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compatibility` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category1` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category2` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category3` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `title`, `mini_description`, `full_description`, `compatibility`, `category1`, `category2`, `category3`, `paypal_id`) VALUES
(1, 'neo-sm 26 Shark', 'neo-sm 26 shark is a powerful and feature rich packet capture and analysis application for Android.', '- Realtime view/inspection of incoming packets\r\n- Network packet capture to PCAP file format from any interface (Wifi or Cellular)\r\n- Detailed inspection of a wide range of IP networking protocols\r\n- Supports tcpdump style capture filter syntax\r\n- Ability to open and analyze offline PCAP files \r\n- Built-in file browser for choosing PCAP files to open from anywhere on your device\r\n- Detailed statistical analysis of PCAP files\r\n- Powerful filtering architecture allows user to build complex filtered views of offline data\r\n- Ability to export PCAP stats to PDF\r\n- Ability to export individual packets to separate PCAP file\r\n- Ability to reassemble and save web images from TCP streams \r\n(works with popular apps and mobile sites like Facebook and Instagram!)\r\n', 'neo-sm 26', 'hacking', 'spy', '', 'paypal_id'),
(2, 'neo-sm 26 DeProxy', 'neo-sm 26 DeProxy is a Network traffic monitor that helps you to debug your network applications ie check if your REST API is working correctly, latency check etc. It Decrypts SSL by acting as a mitm proxy, no need to setup a proxy server on your computer.', '* Web debugger\r\n* Capture packets in native code (c), so it is fast.\r\n* Bandwidth throttling under various presets; GPRS, 2G, 3G, 4G.Examine app performance under different connection speeds.\r\n* HTTP, SSL/HTTPS monitor\r\n* Highlight syntax \r\n* Decrypt SSL traffic using man-in-the-middle technique\r\n* HTTP request performance testing; view request timing, response timing, latency\r\n* View traffic content such as HTTP headers, HTML, JSON, Javascript, CSS.\r\n* Security testing - Mitm attack vulnerability test.\r\n* View live data consumption', 'neo-sm 26', 'hacking', '', 'antispy', 'paypal_id'),
(3, 'neo-sm 26 Dniff', 'neo-sm 26 Dniff is an Android app for Security analysis in wireless networks and capturing facebook, twitter, linkedin and other accounts.', 'neo-sm 26 Dniff was developed as a tool for testing the security of your accounts. This software is neither made for using it in public networks, nor for hijacking any other persons account. It should only demonstrate the poor security properties network connections without encryption have. So do not get DroidSniff to harm anybody or use it in order to gain unauthorized access to any account you do not own! Use this software only for analyzing your own security!', 'neo-sm 26', 'hacking', 'spy', '', 'paypal_id'),
(4, 'neo-sm 26 Ploit', 'neo-sm 26 ploit is an Android network analysis and penetration suite which aims to offer to IT security experts the most complete and advanced professional toolkit to perform network security assessments on a mobile device.', 'neo-sm 26 ploit is started, you will be able to easily map your network, fingerprint alive hosts operating systems and running services, search for known vulnerabilities, crack logon procedures of many tcp protocols, perform man in the middle attacks such as password sniffing ( with common protocols dissection ), real time traffic manipulation, etc, etc .\r\n\r\nThis application is still in beta stage, a stable release will be available as soon as possible, but expect some crash or strange behavior until then, in any case, feel free to submit an issue here on GitHub.\r\n\r\n\r\nWiFi Cracking\r\nThe WiFi scanner will show in green access points with known default key generation algorithms, clicking on them allows you to easily crack the key, supported models: Thomson, DLink, Pirelli Discus, Eircom, Verizon FiOS, Alice AGPF, FASTWEB Pirelli and Telsey, Huawei, Wlan_XXXX, Jazztel_XXXX, Wlan_XX, Ono ( P1XXXXXX0000X ), WlanXXXXXX, YacomXXXXXX, WifiXXXXXX, Sky V1, Clubinternet.box v1 and v2, InfostradaWifi.\r\n\r\nTrace\r\nPerform a traceroute on target.\r\n\r\nPort Scanner\r\nA syn port scanner to find quickly open ports on a single target.\r\n\r\nInspector\r\nPerforms target operating system and services deep detection, slower than syn port scanner but more accurate.\r\n\r\nVulnerability Finder\r\nSearch for known vulnerabilities for target running services upon National Vulnerability Database.\r\n\r\nLogin Cracker\r\nA very fast network logon cracker which supports many different services.\r\n\r\nPacket Forger\r\nCraft and send a custom TCP or UDP packet to the target, such as Wake On LAN packets.\r\n\r\nMITM\r\nA set of man-in-the-midtle tools to command&conquer the whole network.\r\n\r\nSimple Sniff\r\nRedirect target’s traffic through this device and show some stats while dumping it to a pcap file.\r\n\r\nPassword Sniffer\r\nSniff passwords of many protocols such as http, ftp, imap, imaps, irc, msn, etc from the target.\r\n\r\nSession Hijacker\r\nListen for cookies on the network and hijack sessions.\r\n\r\nKill Connections\r\nKill connections preventing the target to reach any website or server.\r\n\r\nRedirect\r\nRedirect all the http traffic to another address.\r\n\r\nReplace Images\r\n\r\nReplace all images on webpages with the specified one.\r\n\r\nReplace Videos\r\nReplace all YouTube videos on webpages with the specified one.\r\n\r\nScript Injection\r\nInject a JavaScript in every visited webpage.\r\n\r\nCustom Filter\r\nReplace custom text on webpages with the specified one.\r\nSimple Sniff\r\nRedirect target’s traffic through this device and show some stats while dumping it to a pcap file.\r\n\r\nPassword Sniffer\r\nSniff passwords of many protocols such as http, ftp, imap, imaps, irc, msn, etc from the target.\r\n\r\nSession Hijacker\r\nListen for cookies on the network and hijack sessions.\r\n\r\nKill Connections\r\nKill connections preventing the target to reach any website or server.\r\n\r\nRedirect\r\nRedirect all the http traffic to another address.\r\n\r\nReplace Images\r\n\r\nReplace all images on webpages with the specified one.\r\n\r\nReplace Videos\r\nReplace all YouTube videos on webpages with the specified one.\r\n\r\nScript Injection\r\nInject a JavaScript in every visited webpage.\r\n\r\nCustom Filter\r\nReplace custom text on webpages with the specified one.\r\n', 'neo-sm 26', 'hacking', 'spy', '', 'paypal_id'),
(5, 'neo-sm 26 Niff', 'neo-sm 26 niff is an Android app that allows you to sniff and intercept web session profiles over the WiFi that your mobile is connected to.', 'It is possible to hijack sessions only when WiFi is not using EAP, but it should work over any private networks (Open/WEP/WPA-PSK/WPA2-PSK)\r\n\r\nFaceBook\r\nTwitter\r\nYoutube\r\nAmazon\r\nVKontakte\r\nTumblr\r\nMySpace\r\nTuenti\r\nMeinVZ/StudiVZ\r\nblogger\r\nNasza-Klasa', 'neo-sm 26', 'hacking', 'spy', '', 'paypal_id'),
(6, 'neo-sm 26 Cept', 'neo-sm 26 cept is a multi functional network toolkit including an Android app for hacking, the main purpose is to recover interesting data from the network stream and perform different kinds of MiTM attacks.', 'Sniffing passwords or hashes of the types: ICQ, IRC, AIM, FTP, IMAP, POP3, SMTP, LDAP, BNC, SOCKS, HTTP, WWW, NNTP, CVS, TELNET, MRA, DC++, VNC, MYSQL, ORACLE, NTLM, KRB5, RADIUS\r\nSniffing chat messages of: ICQ, AIM, JABBER, YAHOO, MSN, IRC, MRA\r\nReconstructing files from: HTTP, FTP, IMAP, POP3, SMTP, SMB\r\nPromiscuous-mode, ARP, DHCP, Gateway, Port, Smart Scanning\r\nCapturing packets and post-capture (offline) analyzing, RAW Mode\r\nRemote traffic capturing via RPCAP daemon and PCAP Over IP\r\nNAT, SOCKS, DHCP\r\nARP, DNS over ICMP, DHCP, SSL, SSLSTRIP, WPAD, SMB Relay, SSH MiTM\r\nSMB Hijack, LDAP Relay, MySQL LOAD DATA Injection\r\nARP Watch, ARP Cage, HTTP Injection, Heartbleed exploit, Kerberos Downgrade, Cookie Killer\r\nDNS, NBNS, LLMNR Spoofing', 'neo-sm 26', 'hacking', 'spy', '', 'paypal_id'),
(7, 'neo-sm 26 Mon', 'neo-sm 26 mon allows you to debug communication on open and secure TCP connections (WiFi/LTE).\r\n', 'neo-sm 26 mon works on the packet level and neo-sm 26 mon works on the content level and is able to unpack the data. To decrypt SSL/TLS, special CA certificate must be installed to the debugged system.', 'neo-sm 26', 'hacking', '', 'antispy', 'paypal_id'),
(8, 'neo-sm 26 Wkill', 'neo-sm 26 wkill is the best Wifi Controller app for any Android Device. It can cut off other internet connections in any wifi network. ', 'It is the best app for reducing bandwidth misuses. Suppose, you are connected to a shared wifi network. The speed of the network is too bad to describe. In this time neo-sm 26 wkill wkill help you out in gaining speed by kicking other connections or blocking them. You can also monitor the data usage of the connected device.', 'neo-sm 26', 'hacking', '', '', 'paypal_id'),
(9, 'neo-sm 26 Icd', 'neo-sm 26 icd is an Android app to detect IMSI-Catchers. These devices are false mobile towers (base stations) acting between the target mobile phone(s) and the real towers of service providers.', 'The FBI or local police regularly deploys IMSI-Catchers hidden in vehicles at protests to obtain a record of everyone who attended with a cell phone (leave your phones at home by all means if you really have to attend). IMSI-Catchers also allow adversaries to intercept your conversations, text messages, and data. Police can use them to determine your location or to find out who is in a given geographic area at what time. Identity thieves can use freely available tools and even build their own rogue GSM BTS to monitor and manipulate communications from a parked car in your residential neighborhood - notably for stealing passwords or credit card data from people nearby who make purchases on their phones. The reason IMSI-Catchers are so commonly used is that it is very easy to get away with using them since they leave no traces. Our app aims to make it possible to detect the IMSI-Catchers so that using them becomes a risky proposition. It also aims to make users safer by alerting on possible interception and tracking. Fight for your privacy!', 'neo-sm 26', '', '', 'antispy', 'paypal_id'),
(10, 'neo-sm 26 Ctl', 'See approximate position of GSM/WCDMA/LTE Cell Towers on Map.\r\nTowers are stored in Database.', 'See Cell IDs, Signal Strength and GPS location.\r\nIn most cases precision of estimated cell position is better for sites with 3 cells detected. If you see only one cell, this is not cell position, this is cell serving area center.', 'neo-sm 26', '', '', 'antispy', 'paypal_id'),
(11, 'neo-sm 26 Sms', 'neo-sm 26 sms is an application to send specific types of short messages in GSM Networks (CDMA is not supported). It can be useful during a pentest or ethical hacking.\r\n', 'Features: \r\n\r\nThis is a standard SMS. The message size is limited to 160 characters.\r\n\r\nA message that should per standard be immediately display to the user in a pop-up window. On some phones (like iPhone afaik) the message gets  display without the senders ID and without the possibility to save the  message. The message size is limited to 160 characters.\r\n\r\nSI stands for Service Indication. This type of message was designed for  service providers to inform their customers of credit limits for their  prepaid cards, software updates etc. On some devices (Windows Mobile, old Blackberrys) this message gets  display with the number from the providers sms service center. Some  Android devices are capable of receiving such messages, others aren’t.  Afaik iPhones are not capable of receiving services messages (they  simply drop them). The message size for sender, subject and message is currently limited to 40 characters each.\r\n\r\n Stands for Service Load. This type of message was designed for  service providers to push content to their customers devices. Different  subtypes allowed user interaction, other allowed NO userinteraction,  means that the ressource defined in the message should be loaded and  executed without user notification or interaction. The last type is what is implemented in neo-sm 26. This only works on Windows Mobile targets  afaik. But also on some devices the sender is obfuscated. The message  size is currently limited to 40 characters.\r\n\r\nThis message type was never ever intended to be sent from a users  device. When you send a normal MMS to somebody, the message gets  uploaded to the service provider. The service provider then sends a  notification to the target number to inform it that a message is waiting and can be downloaded at a provided link. The receipients device will  then establish a data connection to the service provider and download  the message content. neo-sm 26 sms is capable of sending such a notification  on behalf of a service provider. Unfortunately the provided content link cannot be accessed from the target devices due to their MMS  configuration (you know..proxies, APN and such stuff). However, with  this type of message you can obfuscate the sender and subject. The  message size for sender and subject is currently limited to 30  characters each.\r\n\r\nNow this is the fun stuff. With this message you can let the target  device think that there is a voice message on the receipients voice mal  box. An icon gets displayed and the receipient usually will call his  voice box finding out that there are no new messages. BUT: The symbol  will not disapear. It will stay there until the user a) gets a  deactivation message or b) reflashes his smartphone. Yes, even rebooting does not help. Be aware that you can drive people nuts with that one.\r\n\r\nThis is the opposite to the activation message. It will remove the icon from the receipients display.\r\n\r\nThese MWI messages have nowadays no function on devices with Android or iOS. However they should display fine on older Phones like Nokia E7 and such.\r\n\r\n\r\n\r\n\r\nWas developed for users who had bad results with the original ping message. It is nothing else that a MWI Voice DeActivation message  with a requestes delivery report.', 'neo-sm 26', '', 'spy', 'antispy', 'paypal_id'),
(12, 'neo-sm 26 ping', 'Send silent text messages: SMS will not be delivered as standard SMS, target user will receive no visual notification about SMS being received.', 'Send silent text messages: SMS will not be delivered as standard SMS, target user will receive no visual notification about SMS being received.', 'neo-sm 26', '', 'spy', '', 'paypal_id'),
(13, 'neo-sm 26 Dsqli', 'neo-sm 26 dsqli You can easily hack websites that vulnerable from sqli with this amazing android app.', 'neo-sm 26 DSQLi is an android app that allows you to launch SQL injection attacks on a target URL. It’s fully automated, so you don’t need much technical knowledge to operate this application. Just find a vulnerable URL and then put it in the “Target URL”, then tap on “Inject”.\r\nDroidsqli android app helps you in finding vulnerable websites.', 'neo-sm 26', 'hacking', 'spy', '', 'paypal_id');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `instant` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(8192) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(10) NOT NULL,
  `device_name` varchar(12) NOT NULL,
  `device_category` varchar(16) NOT NULL,
  `imei1` varchar(32) NOT NULL,
  `imei2` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `devices_details`
--

CREATE TABLE `devices_details` (
  `id` int(10) NOT NULL,
  `device_name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_mini_description` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_full_description` varchar(8192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_category` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_paypal_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices_details`
--

INSERT INTO `devices_details` (`id`, `device_name`, `device_title`, `device_mini_description`, `device_full_description`, `device_category`, `device_paypal_id`) VALUES
(1, 'neo-sm 26', 'neo-sm 26 Internet Hacking', 'Η συσκευή αυτή εχεί φτιαχτεί για όσους θέλουν να ασχοληθούν ενεργά με το hacking σε σχέση με τις διεισδύσεις και το τεστάρισμα διαφόρων δικτύων.', 'Συλλογή πακέτων: \r\nΠαρακολούθηση / επιθεώρηση εισερχόμενων πακέτων σε πραγματικό χρόνο - Παγίωση πακέτων δικτύου σε μορφή αρχείου PCAP από οποιαδήποτε διεπαφή (Wifi ή Cellular)\r\nΗ ισχυρή αρχιτεκτονική φιλτραρίσματος επιτρέπει στο χρήστη να δημιουργεί σύνθετες φιλτραρισμένες προβολές δεδομένων εκτός σύνδεσης\r\nΔυνατότητα εξαγωγής PCAP\r\nΔυνατότητα εξαγωγής μεμονωμένων πακέτων σε ξεχωριστό αρχείο PCAP\r\nΔυνατότητα επανασυναρμολόγησης και αποθήκευσης εικόνων ιστού από ροές TCP (λειτουργεί με δημοφιλείς εφαρμογές και ιστότοπους για κινητά όπως το Facebook και το Instagram)\r\n<br><br>\r\nΈλεγχος της ασφάλειας των λογαριασμών σας.\r\n\r\nΑυτό το λογισμικό δεν έχει κατασκευαστεί ούτε για χρήση σε δημόσια δίκτυα ούτε για αεροπειρατεία λογαριασμών οποιουδήποτε άλλου προσώπου. \r\nΘα πρέπει να επιδεικνύει μόνο τις κακές ιδιότητες της ασφάλειας των συνδέσεων δικτύου χωρίς κρυπτογράφηση. \r\nΕπομένως, χρησιμοπιήσετε αυτό το πρόγραμμα για να βλάψετε κανέναν και μην το χρησιμοποιήσει για να αποκτήσετε μη εξουσιοδοτημένη πρόσβαση σε οποιονδήποτε λογαριασμό δεν έχετε.\r\nΧρησιμοποιήστε αυτό το λογισμικό μόνο για την ανάλυση της δικής σας ασφάλειας.\r\n<br><br>\r\n\r\nΖωντανά ηλεκτρονικά δακτυλικά αποτυπώματα: \r\n\r\nPort Scanner Ένα σαρωτή λιμένων syn για να βρείτε γρήγορα ανοιχτές θύρες σε ένα μόνο στόχο.\r\nΕύρεση ευπάθειας Αναζήτηση γνωστών τρωτών σημείων για υπηρεσίες που εκτελούνται με στόχο την Εθνική Βάση Δεδομένων Ευπάθειας.\r\nCracker Σύνδεσης Μια πολύ γρήγορη σύνδεση με το δίκτυο, που υποστηρίζει πολλές διαφορετικές υπηρεσίες. Packet Forger Craft και να στείλετε ένα προσαρμοσμένο πακέτο TCP ή UDP στο στόχο, όπως πακέτα Wake On LAN.\r\n Η απλή ανακατεύθυνση Sniff στοχεύει την επισκεψιμότητα μέσω αυτής της συσκευής και εμφανίζει ορισμένα στατιστικά στοιχεία ενώ ταυτόχρονα την απορρίπτει σε ένα αρχείο pcap.\r\nPassword Sniffer Πάρε κωδικούς πρόσβασης πολλών πρωτοκόλλων όπως http, ftp, imap, imaps, irc, msn, κτλ από το στόχο. Συναγερμός περιόδου σύνδεσης Ακούστε τα cookie στο δίκτυο και κατατροπώστε τις περιόδους σύνδεσης.\r\nKill Connections που εμποδίζουν τον στόχο να φτάσει σε οποιονδήποτε ιστότοπο ή διακομιστή.\r\nΕπαναπροσανατολίστε όλη την επισκεψιμότητα http σε άλλη διεύθυνση. Αντικατάσταση εικόνων Αντικαταστήστε όλες τις εικόνες σε ιστοσελίδες με το καθορισμένο.\r\nΑντικατάσταση Βίντεο Αντικαταστήστε όλα τα βίντεο του YouTube σε ιστοσελίδες με τη συγκεκριμένη.\r\nScript Injection Εισάγετε ένα JavaScript σε κάθε ιστοσελίδα που επισκέπτεστε.\r\nΠροσαρμοσμένο φίλτρο Αντικαταστήστε το προσαρμοσμένο κείμενο σε ιστοσελίδες με το καθορισμένο.\r\n<br><br>\r\nΑνίχνευση κωδικών πρόσβασης και μηνυμάτων συνομιλίας:\r\n\r\nΑνίχνευση κωδικών πρόσβασης από:  ICQ, IRC, AIM, FTP, IMAP, POP3, SMTP, LDAP, BNC, SOCKS, HTTP, WWW, NNTP, CVS, TELNET, MRA, DC, VNC, MYSQL, ORACLE, NTLM, KRB5, RADIUS\r\nΑνίχνευση μηνυμάτων συνομιλίας από:  ICQ, AIM, JABBER, YAHOO, MSN, IRC, MRA\r\nΑνασυγκρότηση αρχείων από: HTTP, FTP, IMAP, POP3, SMTP, SMB\r\nPromiscuous mode, ARP, DHCP, πύλη, θύρα, έξυπνη σάρωση\r\nΚαταγραφή πακέτων και ανάλυση μετά την αποτύπωση (offline), λειτουργία RAW\r\nΑπομακρυσμένη καταγραφή κίνησης μέσω δαίμονα RPCAP και PCAP Over IP NAT, SOCKS, DHCP ARP, DNS μέσω ICMP, DHCP, SSL, SSLSTRIP, WPAD, SMB Relay, SSH MiTM SMB Hijack, LDAP Relay, MySQL\r\nΔΕΙΚΤΗΣ ΕΛΕΓΧΟΥ ΔΕΔΟΜΕΝΩΝ Ρολόι έγχυσης ARP, ARP Cage, Έγχυσης HTTP, εκμετάλλευση Heartbleed, Υποβάθμιση Kerberos, DNS κακόβουλου cookie, NBNS, LLMNR Spoofing\r\n<br><br>\r\nΑνίχνευση κωδικών Κοινωνικών Δικτύων κ.α:\r\n\r\nFaceBook - Twitter - Youtube - Amazon - VKontakte - Tumblr - MySpace\r\n<br><br>\r\nΑποκλεισμός -  Έλεγχος κυκλοφορίας συσκευών:\r\n\r\nΧτυπήστε άλλες συνδέσεις ή μπλοκάρετε της.\r\nΜπορείτε επίσης να παρακολουθείτε τη χρήση δεδομένων της συνδεδεμένης συσκευής.\r\nΜπορείτε να μπλοκάρετε συγκεκριμένες ιστοσελίδες, κοινωνικά δίκτυα και γενικά οποιοδήποτε πρόγραμμα οποιασδήποτε συσκευής.\r\n<br><br>\r\nSQL Ένεση:\r\n\r\nΣας δίνει πρόσβαση σε όλο το περιεχόμενο του ιστότοπου.\r\nΣας βοηθά να αναλάβετε την ιστοσελίδα καταστρέφοντας τις σειρές και τις στήλες της.', 'Internet Hacking', 'paypal_id'),
(2, 'neo-sm 26', 'neo-sm 26 GSM Hacking', 'Η συσκευή αυτή εχεί φτιαχτεί για όσους θέλουν να ασχοληθούν ενεργά με το hacking σε σχέση με τις διεισδύσεις και το τεστάρισμα του τηλεφωνικού δικτύου GSM.', 'Ολοκληρωμένο σύστημα αντιπαρακολούθησης για κινητά τηλέφωνα android. \r\n\r\nΜετατροπή του κινητού σας τηλεφώνου σε mini βαλιτσάκι. \r\nΠροστασία τηλεφωνικών συνομιλιών. (Πραγματοποιήστε ασφαλείς συνομιλίες, από ασφαλείς περιοχές) \r\nA5/0, A5/1, A5/2, A5/3, A5/4 \r\nA5/0: Δεν υπάρχει κρυπτογράφηση καθόλου.     \r\nA5/1: Ισχυρή κρυπτογράφηση, προορισμένη για χρήση στη Βόρεια Αμερική και την Ευρώπη.   \r\nA5/2: Αδύναμη κρυπτογράφηση, που προορίζεται για άλλες χώρες, τώρα έχει καταργηθεί από την GSMA. \r\nA5/3: Ακόμη ισχυρότερη κρυπτογράφηση με ανοιχτό σχεδιασμό, που ονομάζεται KASUMI.    \r\n A5/4: Η βασική αλλαγή είναι η εισαγωγή μήκους κλειδιού από 64 bits σε 128 bits.\r\nΠροστασία από σιωπηλά sms. Ένα σιωπηλό sms αποστέλεται από τις διωκτικές αρχές χωρίς να το παρατηρήσετε για να εξαγάγει την τρέχουσα θέση σας από το τηλέφωνο σας. \r\nΥπηρεσίες sms. (Ανύνωμα sms, Κρυπτογραφημένα sms, σιωπηλά sms (μη ανιχνεύσιμα), ψεύτικα sms, ψεύτικος τηλεφωνητής, κατάσταση τηλεφώνου (ανοιχτό κλειστό)). \r\nΖωντανή παρακολούθηση των πύργων κυψελών (GSM) ανά τηλεφωνική εταιρεία.\r\n<br><br>\r\n\r\nΤηλεφωνικές κλήσεις:\r\nΔιασφάλιση ασφαλών συνομιλιών: Κάθε δευτερόλεπτο χωρίς κίνδυνο υποκλοπής, ελέγχοντας τις συνδέσεις ανάμεσα στο κινητό και τους πύργους τηλεποικινωνιών (Βασικό Υποσύστημα Σταθμού) \r\nΈλεγχος των κυψελωτών ψηφιακών ασύρματων τηλεπικοινωνιακών δικτύων, 2G, 3G, 4G \r\nΕνδείξεις καταστάσεως της συσκευή σας: Τα εικονίδια κατάστασης υποδεικνύουν διάφορα επίπεδα απειλών \r\nΧαρτογράφηση παρακολουθούμενων συσκευών σε ακτίνα 6 χιλιομέτρων. \r\nΧαρτογράφηση δεδομένων των αναγνωριστικών κυψέλης: Θέσεις GPS των πύργων κυψελών GSM ανά τηλεφωνική εταιρεία.\r\n<br><br>\r\n\r\nΥπηρεσίες sms:\r\nΥπηρεσίες αντιπαρακολούθησης: (Ανύνωμα sms, Κρυπτογραφημένα sms, σιωπηλά sms (μη ανιχνεύσιμα), ψεύτικα sms, ψεύτικος τηλεφωνητής, κατάσταση τηλεφώνου (ανοιχτό κλειστό)) \r\nΥπηρεσίες παρακολούθησης: (ΠΡΟΣΟΧΗ. Για να χρησιμοποιήσετε αυτές της υπηρεσίες πρέπει να έχετε την συγκατάθεση του ατόμου που θέλετε να παρακολουθήσετε). \r\nΑπομακρυσμένες ρυθμίσεις και ενημερώσεις συσκευής: Σιωπηλά sms (μη ανιχνεύσιμα), σύνδεσμοι που παρακάμπτουν τα στοιχεία εισόδου σε μια συσκευή (email, κωδικός). \r\nΑνίχνευση σιωπηλών sms: Οι διωκτικές αρχές χρησιμοποιούν αυτόν τον τύπο μηνύματος (σε συνεργασία με τον πάροχο σας) για να εντοπίσουν την θέση σας (με ακρίβεια και ανά πάσα στιγμή). \r\nΌλες οι λειτουργίες δουλεύουν απομακρυσμένα μέσω του GSM (Παγκόσµιου Συστήματος Κινητών Επικοινωνιών).\r\n<br><br>\r\n\r\nΤοποθεσίες\r\n\r\nΖωντανή παρακολούθηση και χαρτογράφηση των νομίμων πύργων κυψελών (GSM) ανά τηλεφωνική εταιρεία. \r\nΖωντανή χαρτογράφηση των παρακολουθούμενων συσκευών σε ακτίνα 6 χιλιομέτρων. \r\nΕύρεση του πύργου κινητής τηλεφωνίας που είστε συνδεδεμένος σε ζωντανή μετάδοση. \r\nΕύρεση ψεύτικων σταθμών FBTS και IMSIC σε ακτίνα 6 χιλιομέτρων. \r\n', 'GSM Hacking', 'paypal_id'),
(3, 'neo-sm 26', 'neo-sm 26 Full Hacking', 'Η συσκευή αυτή εχεί φτιαχτεί για όσους θέλουν να ασχοληθούν ενεργά με το hacking σε σχέση με τις διεισδύσεις και το τεστάρισμα διαφόρων καθως και του τηλεφωνικού δικτύου GSM..', 'Συλλογή πακέτων: \r\nΠαρακολούθηση / επιθεώρηση εισερχόμενων πακέτων σε πραγματικό χρόνο - Παγίωση πακέτων δικτύου σε μορφή αρχείου PCAP από οποιαδήποτε διεπαφή (Wifi ή Cellular)\r\nΗ ισχυρή αρχιτεκτονική φιλτραρίσματος επιτρέπει στο χρήστη να δημιουργεί σύνθετες φιλτραρισμένες προβολές δεδομένων εκτός σύνδεσης\r\nΔυνατότητα εξαγωγής PCAP\r\nΔυνατότητα εξαγωγής μεμονωμένων πακέτων σε ξεχωριστό αρχείο PCAP\r\nΔυνατότητα επανασυναρμολόγησης και αποθήκευσης εικόνων ιστού από ροές TCP (λειτουργεί με δημοφιλείς εφαρμογές και ιστότοπους για κινητά όπως το Facebook και το Instagram)\r\n<br><br>\r\nΈλεγχος της ασφάλειας των λογαριασμών σας.\r\n\r\nΑυτό το λογισμικό δεν έχει κατασκευαστεί ούτε για χρήση σε δημόσια δίκτυα ούτε για αεροπειρατεία λογαριασμών οποιουδήποτε άλλου προσώπου. \r\nΘα πρέπει να επιδεικνύει μόνο τις κακές ιδιότητες της ασφάλειας των συνδέσεων δικτύου χωρίς κρυπτογράφηση. \r\nΕπομένως, χρησιμοπιήσετε αυτό το πρόγραμμα για να βλάψετε κανέναν και μην το χρησιμοποιήσει για να αποκτήσετε μη εξουσιοδοτημένη πρόσβαση σε οποιονδήποτε λογαριασμό δεν έχετε.\r\nΧρησιμοποιήστε αυτό το λογισμικό μόνο για την ανάλυση της δικής σας ασφάλειας.\r\n<br><br>\r\n\r\nΖωντανά ηλεκτρονικά δακτυλικά αποτυπώματα: \r\n\r\nPort Scanner Ένα σαρωτή λιμένων syn για να βρείτε γρήγορα ανοιχτές θύρες σε ένα μόνο στόχο.\r\nΕύρεση ευπάθειας Αναζήτηση γνωστών τρωτών σημείων για υπηρεσίες που εκτελούνται με στόχο την Εθνική Βάση Δεδομένων Ευπάθειας.\r\nCracker Σύνδεσης Μια πολύ γρήγορη σύνδεση με το δίκτυο, που υποστηρίζει πολλές διαφορετικές υπηρεσίες. Packet Forger Craft και να στείλετε ένα προσαρμοσμένο πακέτο TCP ή UDP στο στόχο, όπως πακέτα Wake On LAN.\r\n Η απλή ανακατεύθυνση Sniff στοχεύει την επισκεψιμότητα μέσω αυτής της συσκευής και εμφανίζει ορισμένα στατιστικά στοιχεία ενώ ταυτόχρονα την απορρίπτει σε ένα αρχείο pcap.\r\nPassword Sniffer Πάρε κωδικούς πρόσβασης πολλών πρωτοκόλλων όπως http, ftp, imap, imaps, irc, msn, κτλ από το στόχο. Συναγερμός περιόδου σύνδεσης Ακούστε τα cookie στο δίκτυο και κατατροπώστε τις περιόδους σύνδεσης.\r\nKill Connections που εμποδίζουν τον στόχο να φτάσει σε οποιονδήποτε ιστότοπο ή διακομιστή.\r\nΕπαναπροσανατολίστε όλη την επισκεψιμότητα http σε άλλη διεύθυνση. Αντικατάσταση εικόνων Αντικαταστήστε όλες τις εικόνες σε ιστοσελίδες με το καθορισμένο.\r\nΑντικατάσταση Βίντεο Αντικαταστήστε όλα τα βίντεο του YouTube σε ιστοσελίδες με τη συγκεκριμένη.\r\nScript Injection Εισάγετε ένα JavaScript σε κάθε ιστοσελίδα που επισκέπτεστε.\r\nΠροσαρμοσμένο φίλτρο Αντικαταστήστε το προσαρμοσμένο κείμενο σε ιστοσελίδες με το καθορισμένο.\r\n<br><br>\r\nΑνίχνευση κωδικών πρόσβασης και μηνυμάτων συνομιλίας:\r\n\r\nΑνίχνευση κωδικών πρόσβασης από:  ICQ, IRC, AIM, FTP, IMAP, POP3, SMTP, LDAP, BNC, SOCKS, HTTP, WWW, NNTP, CVS, TELNET, MRA, DC, VNC, MYSQL, ORACLE, NTLM, KRB5, RADIUS\r\nΑνίχνευση μηνυμάτων συνομιλίας από:  ICQ, AIM, JABBER, YAHOO, MSN, IRC, MRA\r\nΑνασυγκρότηση αρχείων από: HTTP, FTP, IMAP, POP3, SMTP, SMB\r\nPromiscuous mode, ARP, DHCP, πύλη, θύρα, έξυπνη σάρωση\r\nΚαταγραφή πακέτων και ανάλυση μετά την αποτύπωση (offline), λειτουργία RAW\r\nΑπομακρυσμένη καταγραφή κίνησης μέσω δαίμονα RPCAP και PCAP Over IP NAT, SOCKS, DHCP ARP, DNS μέσω ICMP, DHCP, SSL, SSLSTRIP, WPAD, SMB Relay, SSH MiTM SMB Hijack, LDAP Relay, MySQL\r\nΔΕΙΚΤΗΣ ΕΛΕΓΧΟΥ ΔΕΔΟΜΕΝΩΝ Ρολόι έγχυσης ARP, ARP Cage, Έγχυσης HTTP, εκμετάλλευση Heartbleed, Υποβάθμιση Kerberos, DNS κακόβουλου cookie, NBNS, LLMNR Spoofing\r\n<br><br>\r\nΑνίχνευση κωδικών Κοινωνικών Δικτύων κ.α:\r\n\r\nFaceBook - Twitter - Youtube - Amazon - VKontakte - Tumblr - MySpace\r\n<br><br>\r\nΑποκλεισμός -  Έλεγχος κυκλοφορίας συσκευών:\r\n\r\nΧτυπήστε άλλες συνδέσεις ή μπλοκάρετε της.\r\nΜπορείτε επίσης να παρακολουθείτε τη χρήση δεδομένων της συνδεδεμένης συσκευής.\r\nΜπορείτε να μπλοκάρετε συγκεκριμένες ιστοσελίδες, κοινωνικά δίκτυα και γενικά οποιοδήποτε πρόγραμμα οποιασδήποτε συσκευής.\r\n<br><br>\r\nSQL Ένεση:\r\n\r\nΣας δίνει πρόσβαση σε όλο το περιεχόμενο του ιστότοπου.\r\nΣας βοηθά να αναλάβετε την ιστοσελίδα καταστρέφοντας τις σειρές και τις στήλες της.\r\n<br><br><br>\r\nΟλοκληρωμένο σύστημα αντιπαρακολούθησης για κινητά τηλέφωνα android. \r\n\r\nΜετατροπή του κινητού σας τηλεφώνου σε mini βαλιτσάκι. \r\nΠροστασία τηλεφωνικών συνομιλιών. (Πραγματοποιήστε ασφαλείς συνομιλίες, από ασφαλείς περιοχές) \r\nA5/0, A5/1, A5/2, A5/3, A5/4 \r\nA5/0: Δεν υπάρχει κρυπτογράφηση καθόλου.     \r\nA5/1: Ισχυρή κρυπτογράφηση, προορισμένη για χρήση στη Βόρεια Αμερική και την Ευρώπη.   \r\nA5/2: Αδύναμη κρυπτογράφηση, που προορίζεται για άλλες χώρες, τώρα έχει καταργηθεί από την GSMA. \r\nA5/3: Ακόμη ισχυρότερη κρυπτογράφηση με ανοιχτό σχεδιασμό, που ονομάζεται KASUMI.    \r\n A5/4: Η βασική αλλαγή είναι η εισαγωγή μήκους κλειδιού από 64 bits σε 128 bits.\r\nΠροστασία από σιωπηλά sms. Ένα σιωπηλό sms αποστέλεται από τις διωκτικές αρχές χωρίς να το παρατηρήσετε για να εξαγάγει την τρέχουσα θέση σας από το τηλέφωνο σας. \r\nΥπηρεσίες sms. (Ανύνωμα sms, Κρυπτογραφημένα sms, σιωπηλά sms (μη ανιχνεύσιμα), ψεύτικα sms, ψεύτικος τηλεφωνητής, κατάσταση τηλεφώνου (ανοιχτό κλειστό)). \r\nΖωντανή παρακολούθηση των πύργων κυψελών (GSM) ανά τηλεφωνική εταιρεία.\r\n<br><br>\r\n\r\nΤηλεφωνικές κλήσεις:\r\nΔιασφάλιση ασφαλών συνομιλιών: Κάθε δευτερόλεπτο χωρίς κίνδυνο υποκλοπής, ελέγχοντας τις συνδέσεις ανάμεσα στο κινητό και τους πύργους τηλεποικινωνιών (Βασικό Υποσύστημα Σταθμού) \r\nΈλεγχος των κυψελωτών ψηφιακών ασύρματων τηλεπικοινωνιακών δικτύων, 2G, 3G, 4G \r\nΕνδείξεις καταστάσεως της συσκευή σας: Τα εικονίδια κατάστασης υποδεικνύουν διάφορα επίπεδα απειλών \r\nΧαρτογράφηση παρακολουθούμενων συσκευών σε ακτίνα 6 χιλιομέτρων. \r\nΧαρτογράφηση δεδομένων των αναγνωριστικών κυψέλης: Θέσεις GPS των πύργων κυψελών GSM ανά τηλεφωνική εταιρεία.\r\n<br><br>\r\n\r\nΥπηρεσίες sms:\r\nΥπηρεσίες αντιπαρακολούθησης: (Ανύνωμα sms, Κρυπτογραφημένα sms, σιωπηλά sms (μη ανιχνεύσιμα), ψεύτικα sms, ψεύτικος τηλεφωνητής, κατάσταση τηλεφώνου (ανοιχτό κλειστό)) \r\nΥπηρεσίες παρακολούθησης: (ΠΡΟΣΟΧΗ. Για να χρησιμοποιήσετε αυτές της υπηρεσίες πρέπει να έχετε την συγκατάθεση του ατόμου που θέλετε να παρακολουθήσετε). \r\nΕύρεση τοποθεσίας, απομακρυσμένες ρυθμίσεις και ενημερώσεις συσκευής: Σιωπηλά sms (μη ανιχνεύσιμα), σύνδεσμοι που παρακάμπτουν τα στοιχεία εισόδου σε μια συσκευή (email, κωδικός). \r\nΑνίχνευση σιωπηλών sms: Οι διωκτικές αρχές χρησιμοποιούν αυτόν τον τύπο μηνύματος (σε συνεργασία με τον πάροχο σας) για να εντοπίσουν την θέση σας (με ακρίβεια και ανά πάσα στιγμή). \r\nΌλες οι λειτουργίες δουλεύουν απομακρυσμένα μέσω του GSM (Παγκόσµιου Συστήματος Κινητών Επικοινωνιών).\r\n<br><br>\r\n\r\nΤοποθεσίες\r\n\r\nΖωντανή παρακολούθηση και χαρτογράφηση των νομίμων πύργων κυψελών (GSM) ανά τηλεφωνική εταιρεία. \r\nΖωντανή χαρτογράφηση των παρακολουθούμενων συσκευών σε ακτίνα 6 χιλιομέτρων. \r\nΕύρεση του πύργου κινητής τηλεφωνίας που είστε συνδεδεμένος σε ζωντανή μετάδοση. \r\nΕύρεση ψεύτικων σταθμών FBTS και IMSIC σε ακτίνα 6 χιλιομέτρων. ', 'Full Hacking', 'paypal_id');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `instant` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(64) NOT NULL,
  `device_name` varchar(12) NOT NULL,
  `device_category` varchar(16) NOT NULL,
  `imei1` varchar(32) NOT NULL,
  `imei2` varchar(32) NOT NULL,
  `password` varchar(512) NOT NULL,
  `verification_code` varchar(5) NOT NULL,
  `verified` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `login_error_attempts`
--

CREATE TABLE `login_error_attempts` (
  `id` int(10) NOT NULL,
  `instant` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_addr` varchar(16) NOT NULL,
  `browser` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `users_activities`
--

CREATE TABLE `users_activities` (
  `id` int(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  `ip_addr` varchar(16) NOT NULL,
  `browser` varchar(128) NOT NULL,
  `log_in_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fingerprint` varchar(32) NOT NULL,
  `cookies` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imei1` (`imei1`),
  ADD UNIQUE KEY `imei2` (`imei2`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `devices_details`
--
ALTER TABLE `devices_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imei1` (`imei1`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `imei2` (`imei2`);

--
-- Indexes for table `login_error_attempts`
--
ALTER TABLE `login_error_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_activities`
--
ALTER TABLE `users_activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `devices_details`
--
ALTER TABLE `devices_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_error_attempts`
--
ALTER TABLE `login_error_attempts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users_activities`
--
ALTER TABLE `users_activities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
