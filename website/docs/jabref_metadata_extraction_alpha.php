<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mr. dLib: PDF Metadata Extraction for JabRef</title>
<link href="../site.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
  <p>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3388594-17']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>
    
    <a href="http://www.mr-dlib.org"><img src="../images/mrdliblogo.png" alt="Mr. dLib" width="339" height="98" border="0" /></a></p>
  <p>&nbsp;</p>
</div>
<table width="760" border="0" align="center">
  <tr>
    <td><h1>Extracting Metadata from PDF Files with JabRef </h1></td>
  </tr>
  <tr>
    <td>Since version 2.7 Beta 1 the reference manager <a href="http://jabref.sourceforge.net/" target="_blank">JabRef</a> is using Mr. dLib to extract metadata from PDF files for automatically creating BibTeX entries. On this page we want to give answers to some questions you might ask yourselve. </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h2>What and who is Mr. dLib?</h2></td>
  </tr>
  <tr>
    <td>Mr. dLib is a <strong>m</strong>achine <strong>r</strong>eadable <strong>d</strong>igital <strong>lib</strong>rary from the <a href="http://www.sciplore.org">SciPlore</a> and <a href="http://www.docear.org">Docear</a> team. We aim to provide metadata of millions of academic articles via a free REST based API. Currently, Mr. dLib is under construction. However, we already have developed some tools and services we would like to share, such as metadata extraction from PDF files. JabRef is our first guinipig :-). </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h2>How does metadata extraction work? </h2></td>
  </tr>
  <tr>
    <td>In short: Your PDF file is transfered to our servers, we analyse it and return the metadata. The long version: First, your PDF file is transfered to our servers. Second, we extract as much metadata from the full text of the PDF as possible. For this, we use some self-developed algorithms and existing tools based on machine learning approaches. From the extracted metadata we build something like a fingerprint and check our database (which already contains a few millions metadata for academic articles) for more metadata for your PDF file. That's it :-) </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h2>How good is the metadata extraction? </h2></td>
  </tr>
  <tr>
    <td><p>To be honest: not too good... yet! In about 80% of all cases you should get a correct title. In about 50% you should get some more information like the author(s). And if you are having an article in the field of computer science there is a good chance to get a complete set of metadata. However, we consider the metadata extraction being in Alpha status. From around April 2011 we will spend a lot of time improving the algorithms and performance and we are confident to achieve excellent results.</p>
    <p>However, you can help us: whenever there is a PDF file you did not get the correct title for, please send this file to us <a href="mailto:pdfs@mr-dlib.org">via email</a>. You can also try our <a href="http://www.sciplore.org/publications/2010-ASEO--preprint.pdf">test PDF</a>. If you don't get a complete set of metadata for this PDF, please tell us. </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h2>Why is the metadata extraction so slow? </h2></td>
  </tr>
  <tr>
    <td>Depending on your internet connection uploading a PDF might take a while. However, we  work on this problem. Probably we will modify JabRef, so not the entire PDF is transferred but only the first page which should be sufficient in most cases for metadata extraction. </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h2>Why don't you put the functionality into JabRef directly? </h2></td>
  </tr>
  <tr>
    <td>First, our tools are not platform independent as JabRef is (they run only with Linux). Second, it's just not the concept of Mr. dLib to offer some tools for download. Our goal is to offer services via an API that anybody can access from anywhere without a lot of programming knowledge. Third, we will improve our service much more frequently than JabRef is releasing updates. This way you always have the most current version of our service. </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h2>Do you store any private data or my PDF files on your server?   </h2></td>
  </tr>
  <tr>
    <td>No! Once your PDF file is analyzed on our servers it will be deleted. Also, no other data is transmitted or stored on our servers. </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h2>Can I use Mr. dLib for my software? </h2></td>
  </tr>
  <tr>
    <td>Sure. You can either have a look at the source code of JabRef and see how they are using our service. Or you can wait until April 2011 when we release a documentation for Mr. dLib or you <a href="mailto:contact@mr-dlib.org">contact us</a> telling what exactly you want to use Mr. dLib for. </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
