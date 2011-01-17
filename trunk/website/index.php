<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8"/>
    <meta name="author" content="haran"/>
    <meta name="generator" content="gvim"/>
    <link rel="stylesheet" type="text/css" href="bluehaze.css" title="Blue Haze stylesheet"/>
    <link rel="stylesheet" type="text/css" href="color-scheme.css" title="Blue Haze stylesheet"/>
    <title>dfu-programmer</title>
  </head>


  <body>
    <div id="top"></div>
  
    <!-- ###### Header ###### -->

    <div id="header">
      <span class="headerTitle">dfu-programmer</span>
      <div class="menuBar">
        <span title="Home">Home</span>|
        <span title="Summary"><a href="http://sourceforge.net/projects/dfu-programmer">Summary</a></span>|
        <span title="Releases"><a href="http://sourceforge.net/project/showfiles.php?group_id=147246">Releases</a></span>|
        <span title="Subversion"><a href="https://sourceforge.net/svn/?group_id=147246">Subversion</a></span>
      </div>
    </div>

    <!-- ###### Side Boxes ###### -->

    <div class="sideBox LHS">
      <div>Useful Links</div>
      <a href="http://www.atmel.com/">&#8250; atmel</a>
      <a href="http://www.usb.org/">&#8250; usb</a>
      <a href="http://www.atmel.com/dyn/products/tools_card.asp?family_id=604&amp;family_name=8051+Architecture&amp;tool_id=2767">&#8250; flip</a>
      <a href="http://libusb.sourceforge.net/">&#8250; libusb</a>
      <a href="http://sdcc.sourceforge.net/">&#8250; sdcc</a>
      <a href="http://www.nongnu.org/avr-libc">&#8250; avr-libc</a>
    </div>

    <!-- ###### Body Text ###### -->

    <div id="bodyText">
      <h1 id="welcome">Welcome</h1>
      <dl>
        <dd>dfu-programmer is a Device Firmware Update based USB programmer
            for Atmel chips with a USB bootloader.</dd>
      </dl>

      <a class="topOfPage" href="#top" title="Top Of Page">top</a>
      <h1 id="chips">Supported Chips</h1>
      <dl>
        <dd>
          <table>
            <tr><th>8051 Chips</th>  <th>AVR Chips</th>  <th>AVR32 Chips (A)</th><th>AVR32 Chips (B)</th><th>AVR32 Chips (C)</th></tr>
            <tr><td>at89c51snd1c</td><td>at90usb1286</td><td>at32uc3a0128</td>   <td>at32uc3b064</td>    <td>at32uc3c064</td>    </tr>
            <tr><td>at89c51snd2c</td><td>at90usb1287</td><td>at32uc3a1128</td>   <td>at32uc3b164</td>    <td>at32uc3c0128</td>   </tr>
            <tr><td>at89c5130</td>   <td>at90usb162</td> <td>at32uc3a0256</td>   <td>at32uc3b0128</td>   <td>at32uc3c0265</td>   </tr>
            <tr><td>at89c5131</td>   <td>at90usb646</td> <td>at32uc3a1256</td>   <td>at32uc3b1128</td>   <td>at32uc3c0512</td>   </tr>
            <tr><td>at89c5132</td>   <td>at90usb647</td> <td>at32uc3a0512</td>   <td>at32uc3b0256</td>   <td>at32uc3c1128</td>   </tr>
            <tr><td></td>            <td>at90usb82</td>  <td>at32uc3a1512</td>   <td>at32uc3b1256</td>   <td>at32uc3c1256</td>   </tr>
            <tr><td></td>            <td>atmega16u4</td> <td>at32uc3a0512es</td> <td>at32uc3b0256es</td> <td>at32uc3c1512</td>   </tr>
            <tr><td></td>            <td>atmega32u4</td> <td>at32uc3a1512es</td> <td>at32uc3b1256es</td> <td>at32uc3c264</td>    </tr>
            <tr><td></td>            <td>atmega32u6</td> <td>at32uc3a364</td>    <td></td>               <td>at32uc3c2128</td>   </tr>
            <tr><td></td>            <td></td>           <td>at32uc3a364s</td>   <td></td>               <td>at32uc3c2256</td>   </tr>
            <tr><td></td>            <td></td>           <td>at32uc3a3128</td>   <td></td>               <td>at32uc3c2512</td>   </tr>
            <tr><td></td>            <td></td>           <td>at32uc3a3128s</td>  <td></td>               <td></td>               </tr>
            <tr><td></td>            <td></td>           <td>at32uc3a3256</td>   <td></td>               <td></td>               </tr>
            <tr><td></td>            <td></td>           <td>at32uc3a3256s</td>  <td></td>               <td></td>               </tr>
          </table>
        </dd>
      </dl>

      <a class="topOfPage" href="#top" title="Top Of Page">top</a>
      <h1 id="news">News</h1>
      <dl>
        <dd><?php
              $src = 'http://sourceforge.net/export/projnews.php?group_id=147246&limit=5&flat=0&show_summaries=1';
              $data = file_get_contents($src, "rb");
              echo( $data );
          ?></dd>
      </dl>

      <a class="topOfPage" href="#top" title="Top Of Page">top</a>
      <h1 id="why">Why dfu-programmer?</h1>
      <dl>
        <dd>The need for this tool came about when I needed to flash an
           at89c51snd1c chip that had the USB bootloader on it, but the Atmel
           provided tool (FLIP) didn't support USB flashing in linux.</dd>
        <dd>After a few days of web searching and scrapping together a windows
           machine to do the job, I found that Atmel provided a document
           describing the communications protocol used.  I happily spent the
           next week hacking together the start of dfu-programmer.</dd>
      </dl>

      <a class="topOfPage" href="#top" title="Top Of Page">top</a>
      <h1 id="contact">Contact Information</h1>
      <dl>
        <dd>The <a href="http://sourceforge.net/mail/?group_id=147246">mailing list</a> is the preferred communication method.</dd>
      </dl>
    </div>
    
    <!-- ###### Footer ###### -->
    <div>
      <a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=147246&amp;type=2" width="125" height="37" alt="SourceForge.net Logo" /></a>
    </div>
    <div id="footer">
      <div class="footerLHS">
        <a href="http://validator.w3.org/check/referer">Valid XHTML 1.0 Strict</a>
      </div>
      
      <div class="footerLHS">
        <a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS 2</a>
      </div>
      
      <div>
        http://www.oswd.org/design/1112/bluehaze/index.html
      </div>

      <div>
        Website designed by <a href="http://www.oswd.org/email.phtml?user=haran" title="Email author">haran</a>
      </div>
    </div>
  </body></html>
