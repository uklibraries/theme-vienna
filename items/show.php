<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<table><tr><td>
<?php if(metadata('item', array('Dublin Core', 'Format'))): ?>
        <div class="element-text"><img src="http://kdnp.uky.edu/spokedb/tab_<?php echo metadata ('item', array('Dublin Core', 'Format')); ?>.png"/><br/><br/></div>
<?php endif; ?>
</td>
<td>
<?php if(metadata('item', array('Dublin Core', 'Rights'))): ?>
        <div class="element-text"><img src="http://kdnp.uky.edu/spokedb/<?php echo metadata ('item', array('Dublin Core', 'Rights')); ?>.png"/><br/><br/></div>
<?php endif; ?>
</td>
<td><?php echo metadata('item', array('Item Type Metadata','Interview Accession Number')); ?><?php echo metadata('item', array('Item Type Metadata','Collection Accession')); ?><?php echo metadata('item', array('Item Type Metadata','Series Accession')); ?><br/>

</td>
</tr>
</table>
<div id="primary">
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
        <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><a href="https://oralhistory.uky.edu/spokedb/admin/search?query=<?php echo metadata('item', array ('Dublin Core', 'Identifier')); ?>&query_type=keyword%5B%5D=Item"><img src="http://kdnp.uky.edu/spokedb/edit_button.png"/></a>&nbsp;&nbsp;&nbsp;

</li>
        <li id="next-item" class="next"><?php if(metadata('item', array('Dublin Core', 'Type'))): ?>
        <img src="http://kdnp.uky.edu/spokedb/<?php echo metadata ('item', array('Dublin Core', 'Type')); ?>.png"/>
<?php endif; ?></li>
    </ul>
    
<h1><?php echo metadata('item', array('Dublin Core','Title')); ?> <?php if(metadata('item', array('Item Type Metadata', 'Series Number of Interviews'))): ?>- <?php echo metadata('item', array('Item Type Metadata','Series Number of Interviews')); ?> interviews<?php endif; ?></h1>


<br/>

    <!-- Items metadata -->
    

    <div id="item-metadata">
    <!--<?php echo all_element_texts('item'); ?>-->
    
    <div style="width: 100%; margin: 0 auto;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">General</a></li>
            <li><a href="#view2">Description</a></li>
            <li><a href="#view3">Rights &amp; Usage</a></li>
            <li><a href="#view4">Transcript</a></li>
            <li><a href="#view5">Technical &amp; Preservation</a></li>
            <li><a href="#view6">OHMS</a></li>
            <li><a href="#view7">Links</a></li>
            <li><a href="#view8">Workflow</a></li>
            <li><a href="#view9">Publish</a></li>
        </ul>
        
        <div class="tabcontents">
            <div id="view1">
<?php if(metadata('item', array('Item Type Metadata', 'Interview Accession Number'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Accession Number: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Accession Number')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Collection Accession'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Accession Number: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Accession')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Series Accession'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Accession Number: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Accession')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interviewee'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interviewee: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interviewee')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interviewer'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interviewer: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interviewer')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Date'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Date: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Date')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Collection'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Collection')); ?></td></tr></table></div>
<?php endif; ?>   

<?php if(metadata('item', array('Item Type Metadata', 'Interview Series'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Series')); ?></td></tr></table></div>
<?php endif; ?>  

<?php if(metadata('item', array('Item Type Metadata', 'Collection Series'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series: </h4></td><td style="width:300px;text-align:left;"><a href="/spokedb/items/browse?search=&advanced%5B0%5D%5Belement_id%5D=50&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=<?php echo metadata('item', array('Item Type Metadata', 'Collection Series')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Collection Series')); ?></a></td></tr></table></div>
<?php endif; ?> 

<?php if(metadata('item', array('Item Type Metadata', 'Series Collection'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection: </h4></td><td style="width:300px;text-align:left;"><a href="/spokedb/items/browse?search=&advanced%5B0%5D%5Belement_id%5D=50&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=<?php echo metadata('item', array('Item Type Metadata', 'Series Collection')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Series Collection')); ?></a></td></tr></table></div>
<?php endif; ?> 

<?php if(metadata('item', array('Item Type Metadata', 'Interview Standard Date'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Standard Date: </h4></td><td style="width:300px;text-align:left;"><a href="/spokedb/items/browse?search=&advanced%5B0%5D%5Belement_id%5D=50&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=<?php echo metadata('item', array('Item Type Metadata', 'Interview Standard Date')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Series Collection')); ?></a></td></tr></table></div>
<?php endif; ?> 

<?php if ($seriesint = metadata('item', array('Item Type Metadata', 'Series Interview'), array('delimiter'=>'<br/> '))): ?>
        <div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>Interviews Included in this Project:</h4></td><td style="width:300px;text-align:left;">
<?php echo $seriesint; ?></td></tr></table></div>
<?php endif; ?>
            </div>
            <div id="view2">
<?php if(metadata('item', array('Item Type Metadata', 'Interview Summary'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Summary: </h4></td></tr></table><table style="width:100%;text-align:left;"><tr><td style="width:15px;text-align:left;"></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Summary')); ?></td></tr></table></div>
<?php endif; ?>     

<?php if(metadata('item', array('Item Type Metadata', 'Series Summary'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Summary: </h4></td></tr></table><table style="width:100%;text-align:left;"><tr><td style="width:15px;text-align:left;"></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Summary')); ?></td></tr></table></div>
<?php endif; ?>   

<?php if(metadata('item', array('Item Type Metadata', 'Collection Summary'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Summary: </h4></td></tr></table><table style="width:100%;text-align:left;"><tr><td style="width:15px;text-align:left;"></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Summary')); ?></td></tr></table></div>
<?php endif; ?>   
        
<?php if ($insubjects = metadata('item', array('Item Type Metadata', 'Interview LC Subject'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>LC Subjects:</h4></td><td style="width:300px;text-align:left;">
<?php echo $insubjects; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if ($inkeywords = metadata('item', array('Item Type Metadata', 'Interview Keywords'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>Keywords:</h4></td><td style="width:300px;text-align:left;">
<?php echo $inkeywords; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if ($serieskeywords = metadata('item', array('Item Type Metadata', 'Series Keyword'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>Keywords:</h4></td><td style="width:300px;text-align:left;">
<?php echo $serieskeywords; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if ($seriessubjects = metadata('item', array('Item Type Metadata', 'Series LC Subject'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;valign:top;"><h4>LC Subjects:</h4></td><td style="width:300px;text-align:left;">
<?php echo $seriessubjects; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if ($seriesthemes = metadata('item', array('Item Type Metadata', 'Series Theme'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>Themes:</h4></td><td style="width:300px;text-align:left;">
<?php echo $seriesthemes; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if ($colkeywords = metadata('item', array('Item Type Metadata', 'Collection Keyword'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>Keywords:</h4></td><td style="width:300px;text-align:left;">
<?php echo $colkeywords; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if ($colsubjects = metadata('item', array('Item Type Metadata', 'Collection LC Subject'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>LC Subjects:</h4></td><td style="width:300px;text-align:left;">
<?php echo $colsubjects; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if ($colthemes = metadata('item', array('Item Type Metadata', 'Collection Theme'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>Themes:</h4></td><td style="width:300px;text-align:left;">
<?php echo $colthemes; ?></td></tr></table>
</div>
<?php endif; ?>
            </div>
            <div id="view3">
<?php if(metadata('item', array('Item Type Metadata', 'Interview Restriction Details'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Restricted: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Restriction Details')); ?></td></tr></table></div>
<?php endif; ?>
        
<?php if(metadata('item', array('Item Type Metadata', 'Interview Rights Statement'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Rights Statement: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Rights Statement')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Deed of Gift'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Deed of Gift: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Deed of Gift')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Allowed Online?'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Allowed Online?: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Allowed Online?')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Paperwork'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Paperwork: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Paperwork')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Associated Files'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Files: </h4></td><td style="width:300px;text-align:left;"><a href="http://kdnp.uky.edu/spokedb/oh-files/<?php echo metadata ('item', array('Item Type Metadata', 'Interview Collection Identifier')); ?>/<?php echo metadata ('item', array('Item Type Metadata', 'Interview Series Identifier')); ?><?php echo metadata ('item', array('Dublin Core', 'Identifier')); ?>/">Download Files</a></td></tr></div>
<?php endif; ?>

            </div>
            <div id="view4">

<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Transcript: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Digital'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Digital Transcript: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Digital')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript State'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Transcript State: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript State')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Typescript'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Typescript: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Typescript')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Translation'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Translation: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Translation')); ?></td></tr></table></div>
<?php endif; ?>

            </div>
            <div id="view5">
<?php if(metadata('item', array('Item Type Metadata', 'Interview Master Type'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Format: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Master Type')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Collection Master Type'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Format: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Master Type')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Series Master Type'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Format: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Master Type')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Series Number of Interviews'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Number of Interviews: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Number of Interviews')); ?></td></tr></table></div>
<?php endif; ?>

            </div>
            <div id="view6">

            </div>
            <div id="view7">

            </div>
            <div id="view8">

            </div>
            <div id="view9">
</div>
 </div> </div>
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
</div>    
    <!--<h3><?php echo __('Files'); ?></h3>-->
    <!--<div id="item-images">
         <?php echo files_for_item(); ?>
    </div>-->

   <?php if(metadata('item','Collection Name')): ?>
      <div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
      </div>
   <?php endif; ?>
   


     <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item','has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>

    <!-- The following prints a citation for this item. -->
    <!--<div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo metadata('item','citation',array('no_escape'=>true)); ?></div>
    </div>-->
       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>




</div> <!-- End of Primary. -->
<script type="text/javascript">(function(){var g=function(a){if(a&&a.stopPropagation)a.stopPropagation();else window.event.cancelBubble=true;var b=a?a:window.event;b.preventDefault&&b.preventDefault()},d=function(a,c,b){if(a.addEventListener)a.addEventListener(c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},a=function(c,a){var b=new RegExp("(^| )"+a+"( |$)");return b.test(c.className)?true:false},j=function(b,c,d){if(!a(b,c))if(b.className=="")b.className=c;else if(d)b.className=c+" "+b.className;else b.className+=" "+c},h=function(a,b){var c=new RegExp("(^| )"+b+"( |$)");a.className=a.className.replace(c,"$1");a.className=a.className.replace(/ $/,"")},e=function(){var b=window.location.pathname;if(b.indexOf("/")!=-1)b=b.split("/");var a=b[b.length-1]||"root";if(a.indexOf(".")!=-1)a=a.substring(0,a.indexOf("."));if(a>20)a=a.substring(a.length-19);return a},c="mi"+e(),b=function(b,a){this.g(b,a)};b.prototype={h:function(){var b=new RegExp(c+this.a+"=(\\d+)"),a=document.cookie.match(b);return a?a[1]:this.i()},i:function(){for(var b=0,c=this.b.length;b<c;b++)if(a(this.b[b].parentNode,"selected"))return b;return 0},j:function(b,d){var c=document.getElementById(b.TargetId);if(!c)return;this.l(c);for(var a=0;a<this.b.length;a++)if(this.b[a]==b){j(b.parentNode,"selected");d&&this.d&&this.k(this.a,a)}else h(this.b[a].parentNode,"selected")},k:function(a,b){document.cookie=c+a+"="+b+"; path=/"},l:function(b){for(var a=0;a<this.c.length;a++)this.c[a].style.display=this.c[a].id==b.id?"block":"none"},m:function(){this.c=[];for(var c=this,a=0;a<this.b.length;a++){var b=document.getElementById(this.b[a].TargetId);if(b){this.c.push(b);d(this.b[a],"click",function(b){var a=this;if(a===window)a=window.event.srcElement;c.j(a,1);g(b);return false})}}},g:function(f,h){this.a=h;this.b=[];for(var e=f.getElementsByTagName("a"),i=/#([^?]+)/,a,b,c=0;c<e.length;c++){b=e[c];a=b.getAttribute("href");if(a.indexOf("#")==-1)continue;else{var d=a.match(i);if(d){a=d[1];b.TargetId=a;this.b.push(b)}else continue}}var g=f.getAttribute("data-persist")||"";this.d=g.toLowerCase()=="true"?1:0;this.m();this.n()},n:function(){var a=this.d?parseInt(this.h()):this.i();if(a>=this.b.length)a=0;this.j(this.b[a],0)}};var k=[],i=function(e){var b=false;function a(){if(b)return;b=true;setTimeout(e,4)}if(document.addEventListener)document.addEventListener("DOMContentLoaded",a,false);else if(document.attachEvent){try{var f=window.frameElement!=null}catch(g){}if(document.documentElement.doScroll&&!f){function c(){if(b)return;try{document.documentElement.doScroll("left");a()}catch(d){setTimeout(c,10)}}c()}document.attachEvent("onreadystatechange",function(){document.readyState==="complete"&&a()})}d(window,"load",a)},f=function(){for(var d=document.getElementsByTagName("ul"),c=0,e=d.length;c<e;c++)a(d[c],"tabs")&&k.push(new b(d[c],c))};i(f);return{}})()</script>
 <?php echo foot(); ?>
