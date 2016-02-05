<?php

// compile tex file to pdf
function toPdf($pathOfTexFile) {
    // need to use absolute path, maybe add $PATH ?
    $pathOfBin = "/usr/local/texlive/2014/bin/x86_64-linux/";
    $p = $pathOfBin;
	$d = dirname($pathOfTexFile);
	$f = basename($pathOfTexFile, ".tex");
	
	$clean = "cd $d;rm -f *.log *.aux *.xdv";
    $cleanPdf = "cd $d;rm -f *.pdf";
    $cleanTexCls = "cd $d;rm -f *.cls *.tex";
	$command = "cd $d;$p" . "xelatex -no-pdf $f.tex";
	$command2 = "cd $d;$p" . "xdvipdfmx $f.xdv";
	
	//echo $clean . "<br/>\n";
	//echo $command . "<br/>\n";
	//echo $command2 . "<br/>\n";
	
	// clean .aux .log .xdv and .pdf file 
	exec($clean);
    exec($cleanPdf);
	
	// tex -> xdv
	exec($command, $info, $var1);
	
	// xdv -> pdf
	exec($command2, $info, $var2);
	
	// Success: $var1 == 0 && $var2 == 0
	// Failed : maybe have not the permision of file associated 
	if ($var1 + $var2 == 0) {
		//echo "### Success. ###<br/>\n";
        exec($clean);
        exec($cleanTexCls);
		return 0;
	} else {
		//echo "### Failed. Maybe you need to check the end of log file. ###<br/>\n";
		return 1;
	}
}

?>
