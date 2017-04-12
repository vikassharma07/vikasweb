-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2014 at 09:09 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freelancer`
--
CREATE DATABASE IF NOT EXISTS `freelancer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `freelancer`;

-- --------------------------------------------------------

--
-- Table structure for table `addpages`
--

CREATE TABLE IF NOT EXISTS `addpages` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(255) NOT NULL,
  `seotitle` varchar(255) NOT NULL,
  `seokeywords` text NOT NULL,
  `seodescription` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `addpages`
--

INSERT INTO `addpages` (`id`, `pagename`, `seotitle`, `seokeywords`, `seodescription`, `detail`) VALUES
(13, 'Select Page', 'about us', '<p>&nbsp;</p>\r\n<p><!--[if gte mso 9]><xml>\r\n<w:WordDocument>\r\n<w:View>Normal</w:View>\r\n<w:Zoom>0</w:Zoom>\r\n<w:TrackMoves />\r\n<w:TrackFormatting />\r\n<w:PunctuationKerning />\r\n<w:ValidateAgainstSchemas />\r\n<w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n<w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n<w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n<w:DoNotPromoteQF />\r\n<w:LidThemeOther>EN-IN</w:LidThemeOther>\r\n<w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n<w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n<w:Compatibility>\r\n<w:BreakWrappedTables />\r\n<w:SnapToGridInCell />\r\n<w:WrapTextWithPunct />\r\n<w:UseAsianBreakRules />\r\n<w:DontGrowAutofit />\r\n<w:SplitPgBreakAndParaMark />\r\n<w:DontVertAlignCellWithSp />\r\n<w:DontBreakConstrainedForcedTables />\r\n<w:DontVertAlignInTxbx />\r\n<w:Word11KerningPairs />\r\n<w:CachedColBalance />\r\n</w:Compatibility>\r\n<m:mathPr>\r\n<m:mathFont m:val="Cambria Math" />\r\n<m:brkBin m:val="before" />\r\n<m:brkBinSub m:val="--" />\r\n<m:smallFrac m:val="off" />\r\n<m:dispDef />\r\n<m:lMargin m:val="0" />\r\n<m:rMargin m:val="0" />\r\n<m:defJc m:val="centerGroup" />\r\n<m:wrapIndent m:val="1440" />\r\n<m:intLim m:val="subSup" />\r\n<m:naryLim m:val="undOvr" />\r\n</m:mathPr></w:WordDocument>\r\n</xml><![endif]--></p>\r\n<p><!--[if gte mso 9]><xml>\r\n<w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\nDefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\nLatentStyleCount="267">\r\n<w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Normal" />\r\n<w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="heading 1" />\r\n<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2" />\r\n<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3" />\r\n<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4" />\r\n<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5" />\r\n<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6" />\r\n<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7" />\r\n<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8" />\r\n<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 1" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 2" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 3" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 4" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 5" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 6" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 7" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 8" />\r\n<w:LsdException Locked="false" Priority="39" Name="toc 9" />\r\n<w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption" />\r\n<w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Title" />\r\n<w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font" />\r\n<w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Subtitle" />\r\n<w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Strong" />\r\n<w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Emphasis" />\r\n<w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Table Grid" />\r\n<w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text" />\r\n<w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="No Spacing" />\r\n<w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Shading" />\r\n<w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light List" />\r\n<w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Grid" />\r\n<w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 1" />\r\n<w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 2" />\r\n<w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 1" />\r\n<w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 2" />\r\n<w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 1" />\r\n<w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 2" />\r\n<w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 3" />\r\n<w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Dark List" />\r\n<w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Shading" />\r\n<w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful List" />\r\n<w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Grid" />\r\n<w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Shading Accent 1" />\r\n<w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light List Accent 1" />\r\n<w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Grid Accent 1" />\r\n<w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 1 Accent 1" />\r\n<w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 2 Accent 1" />\r\n<w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 1 Accent 1" />\r\n<w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision" />\r\n<w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="List Paragraph" />\r\n<w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Quote" />\r\n<w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Intense Quote" />\r\n<w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 2 Accent 1" />\r\n<w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 1 Accent 1" />\r\n<w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 2 Accent 1" />\r\n<w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 3 Accent 1" />\r\n<w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Dark List Accent 1" />\r\n<w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Shading Accent 1" />\r\n<w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful List Accent 1" />\r\n<w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Grid Accent 1" />\r\n<w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Shading Accent 2" />\r\n<w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light List Accent 2" />\r\n<w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Grid Accent 2" />\r\n<w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 1 Accent 2" />\r\n<w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 2 Accent 2" />\r\n<w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 1 Accent 2" />\r\n<w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 2 Accent 2" />\r\n<w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 1 Accent 2" />\r\n<w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 2 Accent 2" />\r\n<w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 3 Accent 2" />\r\n<w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Dark List Accent 2" />\r\n<w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Shading Accent 2" />\r\n<w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful List Accent 2" />\r\n<w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Grid Accent 2" />\r\n<w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Shading Accent 3" />\r\n<w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light List Accent 3" />\r\n<w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Grid Accent 3" />\r\n<w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 1 Accent 3" />\r\n<w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 2 Accent 3" />\r\n<w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 1 Accent 3" />\r\n<w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 2 Accent 3" />\r\n<w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 1 Accent 3" />\r\n<w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 2 Accent 3" />\r\n<w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 3 Accent 3" />\r\n<w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Dark List Accent 3" />\r\n<w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Shading Accent 3" />\r\n<w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful List Accent 3" />\r\n<w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Grid Accent 3" />\r\n<w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Shading Accent 4" />\r\n<w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light List Accent 4" />\r\n<w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Grid Accent 4" />\r\n<w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 1 Accent 4" />\r\n<w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 2 Accent 4" />\r\n<w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 1 Accent 4" />\r\n<w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 2 Accent 4" />\r\n<w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 1 Accent 4" />\r\n<w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 2 Accent 4" />\r\n<w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 3 Accent 4" />\r\n<w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Dark List Accent 4" />\r\n<w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Shading Accent 4" />\r\n<w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful List Accent 4" />\r\n<w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Grid Accent 4" />\r\n<w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Shading Accent 5" />\r\n<w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light List Accent 5" />\r\n<w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Grid Accent 5" />\r\n<w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 1 Accent 5" />\r\n<w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 2 Accent 5" />\r\n<w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 1 Accent 5" />\r\n<w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 2 Accent 5" />\r\n<w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 1 Accent 5" />\r\n<w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 2 Accent 5" />\r\n<w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 3 Accent 5" />\r\n<w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Dark List Accent 5" />\r\n<w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Shading Accent 5" />\r\n<w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful List Accent 5" />\r\n<w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Grid Accent 5" />\r\n<w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Shading Accent 6" />\r\n<w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light List Accent 6" />\r\n<w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Light Grid Accent 6" />\r\n<w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 1 Accent 6" />\r\n<w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Shading 2 Accent 6" />\r\n<w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 1 Accent 6" />\r\n<w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium List 2 Accent 6" />\r\n<w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 1 Accent 6" />\r\n<w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 2 Accent 6" />\r\n<w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Medium Grid 3 Accent 6" />\r\n<w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Dark List Accent 6" />\r\n<w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Shading Accent 6" />\r\n<w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful List Accent 6" />\r\n<w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\nUnhideWhenUsed="false" Name="Colorful Grid Accent 6" />\r\n<w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis" />\r\n<w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis" />\r\n<w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Subtle Reference" />\r\n<w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Intense Reference" />\r\n<w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\nUnhideWhenUsed="false" QFormat="true" Name="Book Title" />\r\n<w:LsdException Locked="false" Priority="37" Name="Bibliography" />\r\n<w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading" />\r\n</w:LatentStyles>\r\n</xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n/* Style Definitions */\r\ntable.MsoNormalTable\r\n{mso-style-name:"Table Normal";\r\nmso-tstyle-rowband-size:0;\r\nmso-tstyle-colband-size:0;\r\nmso-style-noshow:yes;\r\nmso-style-priority:99;\r\nmso-style-qformat:yes;\r\nmso-style-parent:"";\r\nmso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\nmso-para-margin:0cm;\r\nmso-para-margin-bottom:.0001pt;\r\nmso-pagination:widow-orphan;\r\nfont-size:11.0pt;\r\nfont-family:"Calibri","sans-serif";\r\nmso-ascii-font-family:Calibri;\r\nmso-ascii-theme-font:minor-latin;\r\nmso-fareast-font-family:"Times New Roman";\r\nmso-fareast-theme-font:minor-fareast;\r\nmso-hansi-font-family:Calibri;\r\nmso-hansi-theme-font:minor-latin;}\r\n</style>\r\n<![endif]-->\r\n<p style="text-align:justify;line-height:150%" class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-IN">A&nbsp;freelancer,&nbsp;freelance worker, or&nbsp;freelance&nbsp;is somebody who is self-employed and is not committed to a particular employer long term. Sometimes life can get tough, and you probably are thinking, let me quit my Job and work for myself. In short, freelancing definition is, working for yourself. This is a plain and simple explanation.</span></p>\r\n<p style="text-align:justify;line-height:150%" class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-IN">Nowadays, there are many people in the field of freelancing. </span></p>\r\n</p>', '<p>A freelancer, freelance worker, or freelance is somebody who is self-employed and is not committed to a particular employer long term. Sometimes life can get tough, and you probably are thinking, let me quit my Job and work for myself. In short, freelancing definition is, working for yourself. This is a plain and simple explanation. Nowadays, there are many people in the field of freelancing.</p>', '<p>ghgh</p>'),
(14, 'Services', 'vgg', 'bnyftgh', 'nvftdf bv fbbvcrtcbvcng', ' bvvnbbcv f bnvmhj,jk h ukn gnyugygyghjgghghjbvgh');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE IF NOT EXISTS `applyjob` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `postname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `proposedprice` int(255) NOT NULL,
  `estduration` varchar(700) NOT NULL,
  `coverletter` text NOT NULL,
  `attachment` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`id`, `user_id`, `category`, `postname`, `date`, `proposedprice`, `estduration`, `coverletter`, `attachment`) VALUES
(19, 3, 'Software Developer', 'Software developer', '07/05/14', 90, 'Less than 1 week', 'hjgjhgjhg jhghjg jhhgjhg jhjh', 'Pragya Goel-Resume.doc'),
(20, 3, 'SEO services', 'Keyword analysis and plan', '08/05/14', 300, 'Less than 1 week', 'gjhg', ''),
(21, 3, 'Software Developer', 'Java developer', '09/06/14', 780, '1 to 3 months', 'jhfhjfdhgd', ''),
(22, 28, '', '', '12/05/14', 100, 'Less than 1 week', 'ffgfghfgj', 'RESUME SAMPLE.doc'),
(23, 28, 'SEO services', 'SEO Marketer', '12/05/14', 350, '3 to 6 months', 'cgftfhjbuk', 'sample-Resume-Format.doc'),
(24, 28, 'Web designing', 'Responsive HTML web design', '12/05/14', 100, 'Less than 1 month', 'hmnjkj', 'seema cv.doc'),
(25, 28, 'Web designing', 'UI development for web application', '12/05/14', 150, 'more than 6 months', 'jhuh', 'RESUME SAMPLE.doc'),
(26, 28, 'Web designing', 'Website maintenance and modification', '12/05/14', 160, '3 to 6 months', 'bhjuk', 'sample-Resume-Format.doc'),
(27, 28, 'Software Developer', 'Java developer', '13/05/14', 78, 'Less than 1 week', 'hi..i am seema rana ', 'TABLE OF CONTENTS.docx'),
(28, 28, 'SEO services', 'Keyword analysis and plan', '13/05/14', 300, 'Please select', 'hi i am seema rana ', 'TABLE OF CONTENTS.docx'),
(29, 28, 'Web designing', 'Wordpress Theme Customization', '13/05/14', 200, 'Less than 1 month', 'hello bxb nc b', 'TABLE OF CONTENTS.docx');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`) VALUES
(1, 'Software Developer'),
(2, 'SEO services'),
(3, 'Web designing'),
(4, 'E-commerce'),
(5, '');

-- --------------------------------------------------------

--
-- Table structure for table `enquirydetails`
--

CREATE TABLE IF NOT EXISTS `enquirydetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yourname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `enquirydetails`
--

INSERT INTO `enquirydetails` (`id`, `yourname`, `email`, `contactnumber`, `message`) VALUES
(2, 'rimpy', 'rimpylehal@yahoo.in', 78875656, 'hjghjghghg'),
(14, 'seema', 'ranaseema092@gmail.com', 2147483647, 'bxb hbn nb');

-- --------------------------------------------------------

--
-- Table structure for table `latestnews`
--

CREATE TABLE IF NOT EXISTS `latestnews` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `m_news` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `m_date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `latestnews`
--

INSERT INTO `latestnews` (`id`, `m_news`, `description`, `m_date`, `image`) VALUES
(9, 'Freelancer.com is pleased to announce the acquisition of warrior forum', '<p>we have acquired warrior forum.warrior forum will be a greate resource for you.and everyone within our freelancer community.</p>', '09-MAY-2014', 'aaa.jpg'),
(10, 'Freelancer Andriod App is Here.', '<p>Our new freelancer messanger App is now available for public release on Google play. Stay connected to your employee and freelancer on the go ,and recieve real time notification.</p>', '09-MAY-2014', 'jjk.jpg'),
(13, 'Top stocks for under $5', '<p>On its own the price of a share tells you very little. Just as one apple&nbsp; is still only one apple whether it is chopped in halves, quarters, or&nbsp; eighths, the same goes for a company. A company can be divided by 10&nbsp; shares or 10 million shares &amp;ndash; it will affect the price per share but not&nbsp; the total price for the company.&lt;/p&gt;<br />\r\n&lt;p&gt;In general however, many &amp;lsquo;mid-cap&amp;rsquo; stocks &amp;ndash; the stocks which are today&amp;rsquo;s&nbsp; growth stories and which could in the future to be the ASX&amp;rsquo;s biggest&nbsp; companies &amp;ndash; trade for less than $5 per share. Recent examples of&nbsp; companies which have made this leap include &lt;b&gt;SEEK Limited &lt;/b&gt;(ASX: SEK) and&lt;b&gt; Carsales.Com Limited &lt;/b&gt;(ASX:&nbsp; CRZ) which now have market capitalisations in the billions. As recently&nbsp; as 2011 and 2012 respectively however they both used to trade for under&nbsp; $5 per share!&lt;b&gt;Freelancer Ltd &lt;/b&gt;(ASX: FLN) is also recently listed and currently&nbsp; trades at $1.27. With a focus on recruitment and matching jobs with&nbsp; jobseekers, Freelancer claims to be the world&amp;rsquo;s largest outsourcing&nbsp; marketplace. With the Freelancer model already operating globally in&nbsp; over 247 countries the potential leverage in Freelancer is enormous.</p>', '09-MAY-2014', 'm.jpg'),
(14, 'Freelancer may be set to soar', '<p>There are at least five reasons why Freelancer.com, a small&nbsp; technology company listing on the Australian stock exchange on Friday,&nbsp; could one day be ranked among the country&amp;rsquo;s top 100 companies.&lt;/p&gt;<br />\r\n&lt;p&gt;&lt;a target=&quot;_self&quot; href=&quot;http://www.afr.com/p/opinion/freelancer_worth_share_canaccord_apOeMgDCXOEZBrIGeVvxEN&quot;&gt;Freelancer.com&nbsp; has all the necessary ingredients to join the elite club of companies&nbsp; with a market capitalisation in excess of $1 billion even though it&nbsp; currently earns profits of only about $500,000 a year.&lt;/a&gt;&lt;/p&gt;<br />\r\n&lt;p&gt;The first reason why Freelancer could follow in the footsteps of&nbsp; other successful global technology companies is its market-leading&nbsp; position.&lt;/p&gt;<br />\r\n&lt;p&gt;In the space of four years it has become the leader in its field of&nbsp; online freelancing, outsourced services and crowdsourcing marketplaces.&lt;/p&gt;<br />\r\n&lt;p&gt;Its business model involves users posting projects on its network of&nbsp; websites. It generates fees, by way of commission, when projects are&nbsp; awarded by posters and subsequently accepted by users undertaking the&nbsp; projects.&lt;/p&gt;<br />\r\n&lt;p&gt;The secret to any technology company is being the dominant provider of services in whatever is the chosen field of expertise.&lt;/p&gt;<br />\r\n&lt;p&gt;When Google was launched more than 10 years ago it was not the&nbsp; world&amp;rsquo;s biggest search engine. It was competing with the dominant player&nbsp; AltaVista.&lt;/p&gt;<br />\r\n&lt;p&gt;However, it has since become the world&amp;rsquo;s No 1 search engine and in doing so become the largest advertising company in the world.&lt;/p&gt;<br />\r\n&lt;p&gt;It is a similar story in many online verticals both here and&nbsp; overseas. Good examples include Twitter, Facebook, realestate.com.au,&nbsp; SEEK and carsales.com.&lt;/p&gt;<br />\r\n&lt;p&gt;It has not escaped the attention of many investors that people who&nbsp; are some way connected with these companies are investors in Freelancer.</p>', '09-MAY-2014', 'kk.jpg'),
(15, 'Leading entrepreneurs fear future of engineering', '<p>Barrie, founder of freelancer said despite engineering being the foundation of new start-ups, new&nbsp; enrolments for the degree at Australian universities continues to fall.&nbsp; &amp;ldquo;Australian engineers are up there with the world&amp;rsquo;s best, and the only&nbsp; problem is that we don&amp;rsquo;t have enough of them!&amp;rdquo; Barrie said.&lt;/p&gt;<br />\r\n&lt;p&gt;&amp;ldquo;The number one thing you hear is &amp;lsquo;How can I find a technical &lt;a target=&quot;_blank&quot; href=&quot;http://www.dynamicbusiness.com.au/entrepreneur-profile/lessons-in-innovation-from-apple-and-steve-wozniak-28062012.html&quot;&gt;co-founder&lt;/a&gt;?&amp;rsquo; because the people running [start-ups] are not technical. It&amp;rsquo;s a real problem,&amp;rdquo; he added.&lt;/p&gt;<br />\r\n&lt;p&gt;Part of the problem lies in a lack of awareness among school-aged children of engineering as a career path.&lt;/p&gt;<br />\r\n&lt;p&gt;&amp;ldquo;[School kids] see these big companies, they see Google, they see Facebook, but they can&amp;rsquo;t connect the dots on who &lt;a target=&quot;_blank&quot; href=&quot;http://www.dynamicbusiness.com.au/category/entrepreneur-profile/start-up-entrepreneur&quot;&gt;starts&lt;/a&gt;&nbsp; these businesses. It&amp;rsquo;s quite funny because Facebook was started by&nbsp; someone who was only about four years older than these kids,&amp;rdquo; Barrie&nbsp; said.&lt;/p&gt;<br />\r\n&lt;p&gt;Like Barrie, Richard Chua, founder and CEO of high school tutoring&nbsp; college Talent 100, believes Australia is crying out for a more robust&nbsp; tech sector.&lt;/p&gt;<br />\r\n&lt;p&gt;&amp;ldquo;I think many of our best students end up studying degrees that have&nbsp; more practical job opportunities (eg. law, medicine, banking). One of my&nbsp; biggest regrets was not studying Computer Science in university, but I&nbsp; wasn&amp;rsquo;t even aware of it when I finished the HSC,&amp;rdquo; Chua said.&lt;/p&gt;<br />\r\n&lt;p&gt;Chua believes the US tech giants and universities, as well as the start-up community in &lt;a target=&quot;_blank&quot; href=&quot;http://www.dynamicbusiness.com.au/news/silicon-valley-not-the-only-start-up-hot-zone-26082013.html&quot;&gt;Silicon Valley&lt;/a&gt;, are more effective at inspiring young students to consider engineering as a first choice.&lt;/p&gt;<br />\r\n&lt;p&gt;&amp;ldquo;One of the fundamental issues facing Australia is how to invest in&nbsp; and spur innovation. I think investing in infrastructure like the NBN is&nbsp; a step in the right direction,&amp;rdquo; Chua said.&lt;/p&gt;<br />\r\n&lt;p&gt;Barrie believes that Australian start-up heavyweights need to engage with school-aged children to explain the engineering &lt;a target=&quot;_blank&quot; href=&quot;http://www.dynamicbusiness.com.au/hr-and-staff/tricks-to-motivate-staff-not-interested-in-career-development-10072012.html&quot;&gt;career pathway&lt;/a&gt;.</p>', '09-MAY-2014', 'ss.jpg'),
(16, 'Inside e-ployment: Online staffing services put temporary labor within reach ', '<p>Never mind all the stories about unemployment. American businesses are&nbsp; still clamoring for workers. They just may not need them for a full&nbsp; 40-hour week.&lt;/p&gt;<br />\r\n&lt;p&gt;&amp;rdquo;Temps&amp;rdquo; have long been the go-to solution for businesses that need extra&nbsp; hands during busy production cycles or for special projects. In the old&nbsp; days, when you needed &lt;a href=&quot;http://www.pcworld.com/article/170285/Freelance_Marketplace_Connects_Workers_and_Businesses_Worldwide.html&quot;&gt;temporary help&lt;/a&gt;,&nbsp; you had one real option: The temp agency. Temporary staffing&nbsp; agencies&amp;mdash;which are still around, mind you&amp;mdash;might specialize in&nbsp; administrative workers (to handle that filing project that no one else&nbsp; wanted to touch) or hook you up with programmers or project managers&nbsp; (for more complicated, but temporary, projects). Either way, the&nbsp; relationship was generally between you (the employer) and the temp&nbsp; agency. You often had limited control over who came to work on Monday&nbsp; morning and even less over how much they got paid. The agency controlled&nbsp; the relationship, taking the employee&amp;rsquo;s fee and excising a healthy cut&nbsp; before passing the remainder on to the worker as a salary.&lt;/p&gt;<br />\r\n&lt;p&gt;This system worked for years. Many temps were happy to bounce from job&nbsp; to job, much like substitute teachers, waiting for the call as to where&nbsp; they&amp;rsquo;d report the following day for work. And many temp agencies treated&nbsp; their workers as regular employees, withholding taxes and sometimes&nbsp; even offering benefits.&lt;/p&gt;<br />\r\n&lt;p&gt;But that model isn&amp;rsquo;t proving sustainable. The deep cuts temp agencies&nbsp; take&amp;mdash;up to half of a worker&amp;rsquo;s take-home pay&amp;mdash;means most temps can&amp;rsquo;t make&nbsp; much of a living with irregular work. Meanwhile, employers are&nbsp; increasingly on the hunt for deeply qualified individuals with&nbsp; specialized skills. Those individuals may be located anywhere in the&nbsp; world&amp;mdash;and willing to work for much less than previously imagined.</p>', '10-MAY-2014', 'n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `postmanagement`
--

CREATE TABLE IF NOT EXISTS `postmanagement` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `p_date` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `est_time` varchar(500) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `jobdescription` text NOT NULL,
  `skill` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `postmanagement`
--

INSERT INTO `postmanagement` (`id`, `categoryname`, `title`, `p_date`, `price`, `est_time`, `budget`, `jobdescription`, `skill`) VALUES
(26, 'Software Developer', 'Java developer', '09-APR-2014', 'fixed', '15-20 days', '78', '<p>I wanted to have a fix for my payroll system.</p>', '<p><strong>JAVA,MYSQL</strong></p>'),
(27, 'Software Developer', 'Developer', '09-APR-2014', 'fixed', '1 month', '67', '<p>A small software developement from data provided in such a way that any change should give instant changes at the end result.</p>', '<p><strong>AGILE-SOFTWARE DEVELOPMENT<br />\r\n</strong></p>'),
(29, 'Software Developer', 'Php developer', '09-APR-2014', 'fixed', '1 month', '90', '<p>Software  development for proof of concept  Ongoing Position: Designer, Developer   Which operating systems does this application work on?: Windows   Project Stage: I have an idea  Industry Experience Required: Finance   API Integration Required: Other  You will be asked to answer the  following questions when applying: What challenging part of this job are  you most experienced in? Which part of this project do you think will  take the most time?</p>', '<p><strong>JAVA,PHP,MYSQL</strong></p>'),
(30, 'Software Developer', '.NET developer', '09-APR-2014', 'fixed', 'about 6 months', '100', '<p>I am looking for C# developer who can help me put together a functional order matching engine with orderbook functionality for simulated stock exchange.  I have some basic order book code but I need a experienced developer to help me put it together. I expect you develop as well as coach me. If you are interested, please apply. You must have good internet connection for screen sharing be comfortable with voice communication on skype.</p>', '<p><strong>C#,ASP.NET,.NET-framework,ADO.NET</strong></p>'),
(31, 'Web designing', 'Responsive HTML web design', '17-APR-2014', 'fixed', 'about 2 months', '100', '<p>I am looking for someone to design framework for my website.I will provide color scheme and content headers and will require you to design the site in responsive HTML.</p>\r\n<p>Front end only.</p>', '<p><strong>BANNER-DESIGN,CHARACTER-DESIGN,HTML</strong></p>'),
(32, 'Web designing', 'Web designer-Desktop/Tablet/Mobile', '16-APR-2014', 'fixed', 'about 2 months', '200', '<p>Music United is looking for a creative designer to help re-brand our website,change its look and feel and help redeign the user interface of one of our key features.</p>\r\n<p>Your responsibilities:</p>\r\n<p>-create website wireframe that can be handled to a web-designer for cutting-up into HTML.</p>\r\n<p>-Understand how to read feature user stories to come up with creative ways to implement user requirements.</p>\r\n<p>-provide estimates and deliver in 2 week sprints.</p>\r\n<p>-contribute ideas for making the&nbsp; application attractive and easy to use.</p>\r\n<p>-be a team player.</p>', '<p><strong>abode-photoshop,creative-writing,graphic-design,html5,interaction-design,ui-design,web-design</strong></p>'),
(33, 'Web designing', 'UI development for web application', '16-APR-2014', 'fixed', '3 months', '150', '<p>We have 2 projects for which we need UI designers to create HTML pages and do graphic designing as well.</p>\r\n<p>Intuitive designing.</p>\r\n<p>For mobile phones as well preffered.</p>', '<p><strong>android-app-development,corel-draw,css,html,html5,web-design</strong></p>'),
(34, 'Web designing', 'Website maintenance and modification', '16-APR-2014', 'fixed', 'about 1 month', '160', '<p>Hello,</p>\r\n<p>We are searching for a person who can made a website modifications,adding some texts,images,couple of pages.</p>\r\n<p>Modifications must be made in all 3 languages.</p>\r\n<p>I also have a time limit of only 1 week!!</p>', '<p><strong>WEB-DESIGN,WEB-DEVELOPMENT</strong></p>'),
(35, 'Web designing', 'Wordpress Theme Customization', '17-APR-2014', 'fixed', '1 month', '200', '<p>We have a large corporation that has a website in need of a quality web 2.0 facelift.</p>\r\n<p>We are looking for WORDPRESS EXPERTS for this task.</p>\r\n<p>This job will require taking our vision and implementing it with your wordpress design skills.</p>\r\n<p>One-time project: create Wordpress design</p>', '<p><strong>UI-DESIGN</strong></p>'),
(36, 'SEO services', 'Keyword analysis and plan', '18-APR-2014', 'fixed', '1 MONTH', '300', '<p>I am looking for someone to join my team! Services we provide generally consists of:</p>\r\n<p>1. Market analysis,competitive analysis,keyword research based on target market and search volume.</p>\r\n<p>2. On-site SEO such as xml sitemap,title/meta tags,on-page seo copywriting,url structure.</p>\r\n<p>3. Content production and social media marketing.\r\nWhat is need is someone who can take care of creating a keyword plan to start off our SEO projects.\r\n\r\nPlease tell me:\r\n\r\n1. How you usually work -what information would you need to start doing keyword research.\r\n\r\n2.I''d also like to see a sample of a keyword plan you''ve created along with the data to support the keywords you feel a particular company should target. What i ultimately want to create for our clients is a report showing the research we''ve done and the keywords we feel we want to target and why.\r\n\r\nI am looking forward to finding a great SEO expert to add to our team. </p>', 'SEO-KEYWORD-SEARCH'),
(37, 'SEO services', 'SEO Marketer', '18-APR-2014', 'fixed', '1 week', '350', '<p>We need someone that can help us market a niche business of ours to allow us to expand to more cities. To do this we need someone familiar running geographic</p>', ''),
(38, 'SEO services', 'Adwords,Multimedia,SEO Specialist', '', 'hourly', '1 month', '50', 'We are needing someone to take over my Google Adwords Campaigns so that I can expand my company. At the moment my Google Adwords is working great and as like always has room from improvement. I am looking for some one who is up for a challenge and is not afraid to work in a very challenging industry. The industry is the financial services sector (for cars, boats, jetski''s, caravans, trucks and motorbikes. You will start my looking after the adwords and multimedia, email outs and also the SEO. Only people with years of experience and is willing to learn about the industry and also is good at writing copy need apply. Price is negotiable and ongoing monthly', ''),
(41, 'SEO services', 'Adwords,Multimedia & SEO Specialist', '04-MAY-2014', 'fixed', '1 month', '50', '<p>We need someone to take over my Google Adwords Campaigns so that i can expand my company. At the moment my Google Adwords is working great and as like always has room from improvement.I am looking for someone who is up for a challenge and is not afraid to work in a very challenging industry.The industry is the financial services sector(for cars, boats,trucks,motorbikes). You will start my looking after the awords and multimedia ,email outs and also the seo.Only people with years of experience and is willing to learn about the industry and also is good at writing copy need apply.Price is negotiable and ongoing monthly.</p>', '<p><strong>BLOG COMMENTING,DIRECTORY-SUBMISSION,FACEBOOK-MARKETING,FORUM-POSTING,GOOGLE ADWORDS,GOOGLE-ANALYTICS,INTERNET-MARKETING,LINK-BUILDING,SEO,OFF-PAGE-OPTIMIZATION,ON-PAGE-OPTIMIZATION,PAY-PER-CLICK,SOCIAL-MEDIA-NETWORKING</strong></p>'),
(42, 'SEO services', 'Legal Assistant VA', '04-MAY-2014', 'hourly', 'more than 6 months', '100', '<p>PLEASE READ THE ENTIRE JOB POSTING BEFORE APPLYING.<br />\r\nONLY </p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `percentage` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user_id`, `fname`, `lname`, `emailid`, `profession`, `testname`, `date`, `percentage`) VALUES
(1, 3, 'rimpy', 'lehal', 'kjhjh', 'jhjk', 'JAVA', '28/04/14', 70),
(2, 3, 'rimpy', 'lehal', 'kjhjh', 'jhjk', 'JAVA', '28/04/14', 70),
(3, 3, 'rimpy', 'lehal', 'kjhjh', 'jhjk', 'JAVA', '28/04/14', 70),
(4, 3, 'rimpy', 'lehal', 'kjhjh', 'jhjk', 'Hypertext Markup Language(HTML)', '28/04/14', 70),
(5, 25, 'mikey', 'lehal', '', '', 'Structured Query Language(SQL)', '29/04/14', 60),
(6, 3, 'rimpy', 'lehal', 'kjhjh', 'jhjk', 'Structured Query Language(SQL)', '05/05/14', 70),
(7, 3, 'rimpy', 'lehal', 'kjhjh', 'jhjk', 'Hypertext Markup Language(HTML)', '10/05/14', 60),
(8, 3, 'rimpy', 'lehal', 'kjhjh', 'jhjk', 'Hypertext Markup Language(HTML)', '10/05/14', 60),
(9, 28, 'seema', 'rana', 'ranaseema092@gmail.com', 'software developer', 'Hypertext Markup Language(HTML)', '13/05/14', 60);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `professionaltitle` varchar(255) NOT NULL,
  `overview` text NOT NULL,
  `skills` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `passedyear` varchar(255) NOT NULL,
  `e_desc` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `l_country` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `f_month` varchar(255) NOT NULL,
  `f_year` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `uname`, `pwd`, `fname`, `lname`, `emailid`, `country`, `image`, `professionaltitle`, `overview`, `skills`, `availability`, `education`, `name`, `passedyear`, `e_desc`, `company`, `city`, `l_country`, `title`, `role`, `month`, `year`, `f_month`, `f_year`, `descr`) VALUES
(3, 'rimpy', '12345', 'rimpy', 'lehal', 'kjhjh', 'America', '1466029_563407203773637_2138162674_n.jpg', 'jhjk', 'kjhjk', 'hjgg', 'Part time', 'graduation', 'gtyut', '2006', 'hjhg', 'hjgjh', 'ggh', 'hjg', 'kjhjk', 'Lead', 'May', 'Select', 'select', '2009', ' kghjg '),
(17, 'gurpreet', '123', 'gurpreet', 'sandhu', 'hkjghkjg@gjhg.hgh', 'Canada', '', 'GJHGHJGHJG', '<p>GHHJGHJHGHG</p>', 'GHG', 'Full time', 'graduation', 'HJGHG', '2004', '<p>HH</p>', 'HGHJG', '', '', '', 'Please Select', '', 'Select', 'select', 'Select', ''),
(28, 'seema', '12345', 'seema', 'rana', 'ranaseema092@gmail.com', 'India', '10007403_729094840467312_5440237156093081048_n.jpg', 'software developer', 'hgbn', 'vchgvnb', 'Full time', 'graduation', 'bhbmn', '2006', 'nbbmnnn,', 'nvhjhm', 'nvhhn', 'vhhhu', 'nbhghjyiuyhk', 'Intern', 'January', '2003', 'April', '2001', '					 njmn mhnbm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
