<!DOCTYPE HTML>
<html>
<head>

<?php
$name       = "Parser JSON Online"; 
$title      = "Parser JSON Online - The Best formater, parser json";
$desc       = "The Best online formater and parser to your json file or json text";
$keywords   = "format, json, parser, jason, formatar, test, xml, development, dev, javascript, object";
$copyright  = "SES Sistemas";
$email      = "samuelsantosdev@gmail.com";
$img        = "parserjson.png";
$url        = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'];
$facebookid = "900187540090837";

?>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $title ?></title>

    <meta name="keywords" content="<?php echo $keywords ?>"/>
    <meta name="description" content="<?php echo $desc ?>"/>
    <meta name="subject" content="<?php echo $desc ?>">
    <meta name="copyright"content="<?php echo $copyright ?>">
    <meta name="language" content="EN">
    <meta name="robots" content="index,follow" />
    <meta name="revised" content="" />
    <meta name="abstract" content="">
    <meta name="topic" content="">
    <meta name="summary" content="">
    <meta name="Classification" content="Development">
    <meta name="author" content="<?php echo $copyright ?>, <?php echo $email ?>">
    <meta name="designer" content="">
    <meta name="copyright" content="<?php echo $copyright ?>">
    <meta name="reply-to" content="<?php echo $email ?>">
    <meta name="owner" content="">
    <meta name="url" content="<?php echo $url ?>">
    <meta name="identifier-URL" content="<?php echo $url ?>">
    <meta name="directory" content="submission">
    <meta name="category" content="">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="1 day">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">


    <meta name="og:title" content="<?php echo $title ?>"/>
    <meta name="og:type" content="text/html"/>
    <meta name="og:url" content="<?php echo $url ?>"/>
    <meta name="og:image" content="<?php echo $url.'/img/'. $img ?>"/>
    <meta name="og:site_name" content="<?php echo $name ?>"/>
    <meta name="og:description" content="<?php echo $desc ?>"/>
    <meta name="fb:page_id" content="<?php echo $facebookid ?>" />

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width = 320, initial-scale = 2.3, user-scalable = no">

    <meta name="tweetmeme-title" content="<?php echo $title ?>" />

    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        body{
            border:0;
            padding:0;
            margin:0;
            font: 12px Inconsolata, monospace;
            color: #fff;
            background: #6A82FB;  /* fallback for old browsers */
            
        }
        body a{
            color:#fff;
        }
        body a:link{
            color:#fff;
        }
        body a:visited{
            color:#fff;
        }
        body>header {
            text-align: left;
        }
        body>footer{
            bottom:0px;
            width: 100%;
            font-size: 10px;
        }
        body>footer>p{
            text-align: center;
            width: 100%;
            font-size: 14px;
        }

        /* Flex */
        .flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .flex-item-1 {
            flex: 1;
        }

        /* Flex Item */
        .item {
            margin: 5px;
            text-align: center;
            font-size: 1.5em;
            border-radius: 7px;
            overflow: hidden;
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
        }

        .container .flex-item-1>textarea{
            width: 95%;
            border-radius: 0px;
            padding: 0px;
            border: 0px; 
            overflow-x: scroll;   
            white-space: nowrap;
            float:right;
            font-size: 12px;
            background-color: #eee;
        }
        .container .flex-item-1>#linecount-container>#linecount{
            width: 100%;
            border-radius: 0px;
            padding: 0px;
            border: 0px; 
            float:left;
            height: 100%;
            background-color: #999;
            font-size: 12px;
            position: absolute;
            top:0px;
        }
        .container .flex-item-1>#linecount-container{
            width: 5%;
            position:relative;
            float:left;
            height: 100%;
            overflow: hidden;
            background-color: #999;
        }

        .container .flex-background{
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 7px;
            overflow:hidden;
        }

        .container .buttons{
            padding-top: 120px;
            width: 70px;
        }

        .container .buttons button{
            width: 100%;
            padding: 10px;
            margin: 5px 0px;
            border: 0px;
            background-color: #2ecc71;
            border-radius: 5px; 
            font-weight: bold;
        }

        .container .buttons select{
            padding:5px; 
            width:100%; 
            text-align:center;
            background-color: #fff;
            border-radius: 5px;
        }

        h1, p{
            margin: 5px 0px;
            padding: 0px;
        }

        p{
            font-size: 18px;
        }

        .small-text{
            font-size: 12px;
            text-align: justify;
        }

        .error-line{
            background: #ff5252;
            color: #fff;
            padding: 0px 10px;
            border-right-width: 10px;
            border-right-color: #000;
            border-top-width: 0px;
        }

    </style>

    <link href="jsoneditor/dist/jsoneditor.min.css" rel="stylesheet" type="text/css">
    <script src="jsoneditor/dist/jsoneditor.min.js"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3800295440199331",
        enable_page_level_ads: true
    });
    </script>

</head>

<body>

	<header>
        <div class="container flex">
            <div class="item flex-item-1">
                <h1>{ JSON Parser Online }</h1>
            </div>
            <div class="item flex-item-1 small-text">
            In computing, JavaScript Object Notation (JSON) (/ˈdʒeɪsən/ "Jason",[1] /ˈdʒeɪsɒn/) is an open-standard file format that uses human-readable text to transmit data objects consisting of attribute–value pairs and array data types (or any other serializable value). It is a very common data format used for asynchronous browser–server communication, including as a replacement for XML in some AJAX-style systems.[2]
            </div>
        </div>
	</header>
	
    <section class="container flex">
        <div class="item flex-item-1 flex-background">
            <p>Paste your JSON</p>
            <div id="linecount-container">
                <div id="linecount"></div>
            </div>
            <textarea rows="31" id="from" ></textarea>
        </div>

        <div class="item flex">
            
            <div class="buttons">

                Tab<br>
                <select id="spaces" name="spaces">
                    <?php for($n=1; $n<=3; $n++): ?>
                    <option value="<?php echo $n ?>" ><?php echo $n ?></option>
                    <?php endfor; ?>
                    <option value="4" selected >4</option>
                </select>
                
                <button type="button" id="format" >
                    Format
                </button>

                <button type="button" id="parser" >
                    Parser
                </button>
                
                
                
            </div>

        </div>

        <div class="item flex-item-1 flex-background">
            <p>Result</p>
            <div id="jsoneditor" style="width: 100%; height: 470px; background-color:#fff; overflow:hidden;"></div>
            <p style="font-size:12px;">
                Powered by ace.c9.io https://github.com/josdejong/jsoneditor
            </p>
        </div>
    </section>

	<footer>
        <p>
            When exchanging data between a browser and a server, the data can only be text.<br>
JSON is text, and we can convert any JavaScript object into JSON, and send JSON to the server.<br>
We can also convert any JSON received from the server into JavaScript objects.<br>
This way we can work with the data as JavaScript objects, with no complicated parsing and translations.
        </p>
        <br>
        <p>
            <a href="https://www.w3schools.com/whatis/whatis_json.asp">
                https://www.w3schools.com/whatis/whatis_json.asp
            </a>
            <br>
            <br>
            <a href="https://en.wikipedia.org/wiki/JSON">
                https://en.wikipedia.org/wiki/JSON
            </a>
            <br><br>
            <a href="https://en.wikipedia.org/wiki/JSONP">
                https://en.wikipedia.org/wiki/JSONP
            </a>
        </p>
	</footer>

</body>

<script>
    // create the editor
    
    // set json
    //var started;
    var from        = document.getElementById("from");
    var parser      = document.getElementById("parser");
    var format      = document.getElementById("format");

    document.querySelector(".container .flex-item-1>#linecount-container")
    .style.height=document.querySelector(".container .flex-item-1>textarea").offsetHeight+"px";
    
    var editorJSON  = function(){
        
        var instance;
        editorJSON = function () {
            return instance;
        };
        instance = this;

        this.editor;
        this.configs;
        this.element;

        this.printError = function(error, explicit) {
            return `Type Error: <font color="red">${error.name}</font> ${error.message}`;
        }
    }

    var editorCode = function(){
        
        var instance
        editorCode = function () {
            return instance
        };
        instance = this

        this.lines = 1
        this.currentCountLines = 0
        this.errorColor = "#ff5252"
        this.defaultColor = "#fff"
        this.nFor;
        this.lineNumber;

        this.validateJson = function(){

            this.clearErrors();
            document.getElementById("jsoneditor").innerHTML="";
            try{
                JSON.parse(document.getElementById("from").value);
                document.getElementById("format").click();
            }
            catch(ex)
            {
                ed = new editorCode();
                ed.errorMessage(ex);
            }
        }

        this.increaseLines = function()
        {
            for(n=this.currentCountLines; n<this.lineNumber; n++){

                if( typeof document.getElementsByClassName(`line-${n+1}`)[n] == 'undefined' ){
                    span = document.createElement('span')
                    span.className = `lines line-${n+1}`
                    span.innerHTML = n+1
                    br = document.createElement('br')
                    br.className = `lines line-${n+1}`
                    document.getElementById("linecount").append(span);
                    document.getElementById("linecount").append(br);
                }
            }
        }

        this.decreaseLines = function()
        {
            for(n=this.lineNumber+1; n <= this.currentCountLines; n++){
                console.log(n);
                for(idxc in document.getElementsByClassName("line-" + n )){
                    if( typeof document.getElementsByClassName("line-" + n )[0] != 'undefined' )
                        document.getElementsByClassName("line-" + n )[0].remove(); 
                }
            }
        }

        this.createLineCounter = function(){
            
            txt = document.getElementById("from").value
            lineNumber = (txt.match(/\n/g) || []).length + 1

            elementsToCreate = lineNumber - this.currentCountLines;
            
            this.lineNumber = lineNumber
            //this.nFor = lineNumber - elementsToCreate
            
            if(elementsToCreate > 0)
                this.increaseLines()
            else if( elementsToCreate < 0 )
                this.decreaseLines()

            this.currentCountLines = document.querySelectorAll("#linecount span.lines").length;

        }

        this.clearErrors = function(){
            [].forEach.call(document.getElementsByClassName("error-line"), function(el) {
                el.classList.remove("error-line");
            });
        }

        this.lineError = function(lineNumber){
            if ( typeof document.getElementsByClassName("line-"+lineNumber)[0] != 'undefined' ){
                classes = "error-line " + document.getElementsByClassName("line-"+lineNumber)[0].className;
                document.getElementsByClassName("line-"+lineNumber)[0].className=classes;
            }
        }

        this.errorMessage = function(ex){
            e = new editorJSON();
            element = document.getElementById("jsoneditor");
            element.style.color="#333333";
            element.style.textAlign="left";
            element.style.fontSize="12px";
            

            if (ex instanceof SyntaxError) 
            {
                txt = document.getElementById("from").value;
                a = parseInt(ex.message.replace(/.*(in JSON at position)/, ''));
                if(Number.isInteger(a)){
                    
                    sizeStrTotal = 200;

                    charIdx     = a; 
                    startStr    = Math.max(0, a - ( sizeStrTotal / 2) );
                    strLength   = sizeStrTotal;

                    textAtError = txt.substr(0, charIdx);
                    lineError = (textAtError.match(/\n/g) || []).length + 1;
                    
                    textError       = txt.substr( startStr, strLength );
                    currentCharIdx  = charIdx - startStr;
                    textFindBreck   = textError.substr(currentCharIdx);
                    idxBreack       = textFindBreck.search("\n");
                    
                    textError = textError
                    .substr(0, currentCharIdx + idxBreack)
                    .substr(0, Math.max(1, currentCharIdx - 1)) + '<b>{color}' +
                    textError.substr(currentCharIdx, 1) + "{colorc}</b> <- error";

                    textError = textError
                    .replace(/ /ig, '&nbsp;')
                    .replace(/\t/ig, '&nbsp;&nbsp;&nbsp;&nbsp;')
                    .replace(/(?:\r\n|\r|\n)/g, '<br>')
                    .replace('{color}', '<font color="red">').replace('{colorc}', '</font>');

                    this.clearErrors();
                    this.lineError(lineError);        

                    ex.message = "<br>Line: <font color=\"red\">" + lineError + "</font>" + 
                    '<br>..................................................<br>' +
                    textError +
                    '<br>\
                    ..................................................<br><br>'+
                    ex.message + 
                    " <br/>";
                    element.innerHTML = e.printError(ex, true);
                }
                else
                {
                    element.innerHTML = e.printError(ex, true);
                }
                
            } else {
                e.printError(ex, false);
            }
        }

    }

    format.addEventListener('click', function(){

        e = new editorJSON();
        element = document.getElementById("jsoneditor");
        element.innerHTML = '';

        ed = new editorCode();
        ed.clearErrors();

        if(typeof e.configs != 'undefined')
            e.editor.destroy();

        try{
            
            json = JSON.parse(document.getElementById("from").value);

            e.configs = { 
                "mode": "code",
                "search": true,
                "indentation": document.getElementById("spaces").value
            };
            e.element = document.getElementById("jsoneditor");
            e.editor = new JSONEditor(e.element, e.configs);
            e.editor.set( json );
        }
        catch(ex)
        {
            ed = new editorCode();
            ed.errorMessage(ex);
        }

    });

    parser.addEventListener('click', function(){
        
        e = new editorJSON();
        if(typeof e.configs != 'undefined')
            e.editor.destroy();

        
        ed = new editorCode();
        ed.clearErrors();

        e.configs = { 
            "mode": "form",
            "search": true,
            "indentation": 4
        };

        try{
            e.element = document.getElementById("jsoneditor");
            e.editor = new JSONEditor(e.element, e.configs);
            e.editor.set( JSON.parse(document.getElementById("from").value) );
        }
        catch(ex)
        {
            ed = new editorCode();
            ed.errorMessage(ex);
        }

    });

    f = document.getElementById("from");
    f.addEventListener("keyup", function(char){
        
        editor = new editorCode();
        editor.createLineCounter();
        editor.validateJson();

    });

    from.addEventListener('scroll', function() {
        
        console.log(this.scrollTop);
        document.getElementById("linecount").style.top="-"+this.scrollTop+"px";

    });

    
</script>

</html>