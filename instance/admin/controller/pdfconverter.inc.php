<?php
 ini_set('memory_limit', '-1');
 include 'vendor/autoload.php';
//  $book_file_dir = "instance/admin/media/book_file/Basic-Electronics.pdf";
 $pdfFile = "instance/admin/media/book_file/simple2.pdf";  // Replace with the path to your PDF file

// // Initialize and load PDF Parser library 
 $parser = new \Smalot\PdfParser\Parser(); 

// // Source PDF file to extract text 
 $file =  "instance/admin/media/book_file/simple2.pdf";
 


// // // Parse pdf file using Parser library 
 $pdf = $parser->parseFile($file); 

 
// // // Extract text from PDF 
 $textContent = $pdf->getText();

  ///print_r($textContent);die();
  $textContent = preg_replace('/\s+/', ' ', $textContent); 
  

  //echo $textContent;die();    
  $book_txt_file_name = "123.txt";
  $fp = fopen("instance/admin/media/book_text_file/".$book_txt_file_name, "wb");
  fwrite($fp,$textContent);
  fclose($fp);

// Include Composer's autoloader to load the Tesseract OCR library
// require 'vendor/autoload.php';

// // Import the Tesseract class
// use thiagoalessio\TesseractOCR\TesseractOCR;

// // Set the path to your Tesseract OCR executable (replace with your actual path)
// TesseractOCR::setDefaultConfig(['executable' => '/usr/bin/tesseract']);

// // Input PDF file (replace with your PDF file path)
// $inputPdf = 'instance/admin/media/book_file/simple2.pdf';

// // Output PDF file (replace with your desired output path)
// $outputPdf = 'instance/admin/media/book_file/readable.pdf';

// // Perform OCR and create a readable PDF
// (new TesseractOCR($inputPdf))
//     ->run()
//     ->saveAsPDF($outputPdf);


// require('class.pdf2text.php');

// $a = new PDF2Text();
// $a->setFilename("instance/admin/media/book_file/simple2.pdf");
// $a->decodePDF();
// echo $a->output();die();




?>

