<?php
$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
 <entries>     
 
 
 <definition name="Definition By " author="Author: Rey;...">    
 A statement of the exact meaning of a word, especially in a dictionary.     
 </definition>     
 
 <definition name="Bar by " author=" Author: Mary...">         
 A place that sells alcholic beverages    
 </definition>   
 
 <definition name="Ajax by" author="Author: Nold...">     
 Technique which involves the use of javascript and xml    
 </definition>
 
 <definition name="Html by " author="Author: Jam...">     
The standard markup language for creating web pages and web applications.
 
 </definition>
<definition name="Css by " author="Author: Jos...">     
A style sheet language used for describing the presentation of a document written in a markup language.
 </definition>

<definition name="Javascript by " author="Author Joe...">     
A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.
 </definition>
 
 <definition name="Php by " author="Author: McDowel...">     
A server-side scripting language, and a powerful tool for making dynamic and interactive websites
 </definition>
 
 </entries> ';
header('Content-Type: text/xml'); 
$xmlOutput = new SimpleXMLElement($xmldata); 
echo $xmlOutput->asXML();
