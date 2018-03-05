<?php
//echo $_SERVER['DOCUMENT_ROOT'];
$pathfile = $_SERVER['PHP_SELF']; 
$currentfile = basename($pathfile);
if ($currentfile=='add.html' or $currentfile=='edit.html')
{
?>
    <script>
    window.onbeforeunload = function (evt) {
	var message = "Document 'foo' is not saved. You will lost the changes if you leave the page.";
	if (typeof evt == "undefined") {
		evt = window.event;
	}
	if (evt) {
		evt.returnValue = message;
	}
	return message;
}
</script>
<?php
}
    function left($str, $length) {
        return substr($str, 0, $length);
    }

    function right($str, $length) {
        return substr($str, -$length);
    }

    function alert ($url, $result)
    {
        if ($result==1)
        {
            if ($url!='')
            {
                echo '<div class="alert alert-success col-md-8 col-md-offset-2">Действие выполнено успешно</div>';
                echo '<SCRIPT language="JavaScript"> window.location="/admin/'.$url.'/";</SCRIPT>';
            }
            else
            {
                echo '<div class="alert alert-success col-md-8 col-md-offset-2">Действие выполнено успешно</div>';
            }
        }
        elseif ($result==0)
        {
            echo '<div class="alert alert-danger col-md-8 col-md-offset-2">Не удалось выполнить действие</div>';
        }
        
        unset($url, $result);
    }
    function upload_file ($start, $type)
    {
        if ($start==1)
        {
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/content/img/';
            $filename = uniqid().'.jpg';
            $uploadfile = $uploaddir . $filename;
            move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
            
            if ($type=="U")
            {
                $img=", img='".$filename."'";
            }
            elseif ($type=="I")
            {
                $img=$filename;
            }

            return $img;
        }
    }
    function upload_gallery ($start, $type)
    {
        if ($start==1)
        {
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/content/gallery/';
            $filename = uniqid().'.jpg';
            $uploadfile = $uploaddir . $filename;
            move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);

            if ($type=="I")
            {
                $img=$filename;
            }

            return $img;
        }
    }
    function upload_doc ($start, $type)
    {
        if ($start==1)
        {
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/documents/';
            $r= right($_FILES['doc']['name'], 5);
            $filename = uniqid().$r;
            $uploadfile = $uploaddir . $filename;
            move_uploaded_file($_FILES['doc']['tmp_name'], $uploadfile);

            if ($type=="I")
            {
                $doc=$filename;
            }
            if ($type=="U")
            {
                $doc=", filename='".$filename."'";
            }

            return $doc;
        }
    }
    function upload_event ($start, $type)
    {
        if ($start==1)
        {
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/events/';
            $r= right($_FILES['doc']['name'], 5);
            $filename = uniqid().$r;
            $uploadfile = $uploaddir . $filename;
            move_uploaded_file($_FILES['doc']['tmp_name'], $uploadfile);

            if ($type=="I")
            {
                $doc=$filename;
            }
            if ($type=="U")
            {
                $doc=", filename='".$filename."'";
            }

            return $doc;
        }
    }
    function upload_protocol ($start, $type)
    {
        if ($start==1)
        {
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/events/';
            //$uploaddir = '../../events/';
            $r= right($_FILES['protocol']['name'], 5);
            $filename = uniqid().$r;
            $uploadfile = $uploaddir . $filename;
            move_uploaded_file($_FILES['protocol']['tmp_name'], $uploadfile);

            if ($type=="I")
            {
                $protocol=$filename;
            }
            if ($type=="U")
            {
                $protocol=", protocol='".$filename."'";
            }

            return $protocol;
        }
    }
    function addinfo_sitemap($currenturl, $lastmod)
    {
        $xmlFile='../../sitemap.xml';
        $sxe=simplexml_load_file($xmlFile);
    
        //$sxe = new SimpleXMLElement($xmlstr);
        
        $url = $sxe->addChild('url');
        $url->addChild('loc', $currenturl);
        $url->addChild('lastmod', $lastmod);
        $url->addChild('priority', '1');
        
        $sxe->asXML($xmlFile);
    }
?>