<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<script src="https://oralhistory.uky.edu/lity/jquery.js"></script>
<script src="https://oralhistory.uky.edu/lity/lity.js"></script>
<table><tr><td>
<?php if(metadata('item', array('Dublin Core', 'Format'))): ?>
        <div class="element-text"><img src="https://kdnp.uky.edu/spokedb/tab_<?php echo metadata ('item', array('Dublin Core', 'Format')); ?>.png"/><br/><br/></div>
<?php endif; ?>
</td>
<td>
<?php if(metadata('item','Collection Name')): ?>
<div class="element-text"><img src="https://kdnp.uky.edu/spokedb/<?php echo metadata('item','Collection Name'); ?>.png"/><br/><br/></div>
<?php endif; ?>
</td>
<td><?php echo metadata('item', array('Dublin Core','Identifier')); ?><br/>

</td>
</tr>
</table>
<div id="primary">
    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
        <ul class="item-pagination navigation">

        <li id="next-item" class="next"><?php if(metadata('item', array('Dublin Core', 'Type'))): ?>
        <img src="https://kdnp.uky.edu/spokedb/<?php echo metadata ('item', array('Dublin Core', 'Type')); ?>.png"/>
<?php endif; ?></li>
    </ul>
    
<h1><?php echo metadata('item', array('Dublin Core','Title')); ?> <?php if(metadata('item', array('Item Type Metadata', 'Series Number of Interviews'))): ?>- <?php echo metadata('item', array('Item Type Metadata','Series Number of Interviews')); ?> interviews<?php endif; ?></h1>


<br/>

    <!-- Items metadata -->
    

    <div id="item-metadata">

    
    <div style="width: 100%; margin: 0 auto;">
<?php 
$type = $item->getItemType()->name;
if ('collections' === $type): ?>
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">General</a></li>
            <li><a href="#view2">Description</a></li>
            <li><a href="#view3">Rights &amp; Usage</a></li>
            <li><a href="#view7">Links</a></li>
            <li><a href="#view8">Workflow</a></li>
            <li><a href="#view9" style="color:red">Edit</a></li>
        </ul>
<?php endif; ?>
<?php 
$type = $item->getItemType()->name;
if ('series' === $type): ?>
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">General</a></li>
            <li><a href="#view2">Description</a></li>
            <li><a href="#view3">Rights &amp; Usage</a></li>
            <li><a href="#view7">Links</a></li>
            <li><a href="#view8">Workflow</a></li>
            <li><a href="#view9" style="color:red">Edit</a></li>
        </ul>
<?php endif; ?>
<?php 
$type = $item->getItemType()->name;
if ('interviews' === $type): ?>
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">General</a></li>
            <li><a href="#view2">Description</a></li>
            <li><a href="#view3">Rights &amp; Usage</a></li>
            <li><a href="#view4">Transcript</a></li>
            <li><a href="#view5">Technical &amp; Preservation</a></li>
            <li><a href="#view6">OHMS</a></li>
            <li><a href="#view7">Links</a></li>
            <li><a href="#view8">Workflow</a></li>
            <li><a href="#view9" style="color:red">Edit</a></li>
        </ul>
<?php endif; ?>
        <div class="tabcontents">
            <div id="view1">

        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Accession Number: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Dublin Core', 'Identifier')); ?></td></tr></table></div>




<!-- Collections General Tab -->


<?php if(metadata('item', array('Item Type Metadata', 'Collection Master Type'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Master Type: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Master Type')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Collection Abbreviation'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Abbreviation: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Abbreviation')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Collection Access Online'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Access Online: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Access Online')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Collection Accession Date'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Accession Date: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Accession Date')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Collection ARK Identifier'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection ARK Identifier: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection ARK Identifier')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Collection Legacy Identifier'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Legacy Identifier: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Legacy Identifier')); ?></td></tr></table></div>
<?php endif; ?>




<!-- Series General Tab -->


<?php if(metadata('item', array('Item Type Metadata', 'Series Collection'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Collection: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Collection')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Series Master Type'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Master Type: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Master Type')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Series Accession Date'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Accession Date: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Accession Date')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Series ARK Identifier'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series ARK Identifier: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series ARK Identifier')); ?></td></tr></table></div>
<?php endif; ?>



<!-- Interviews General Tab -->


<?php if(metadata('item', array('Item Type Metadata', 'Interview Partial Date'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Partial Date: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Partial Date')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Dublin Core', 'Title'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Title: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Dublin Core', 'Title')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Dublin Core', 'Format'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Format: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Dublin Core', 'Format')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Dublin Core', 'Identifier'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Identifier : </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Dublin Core', 'Identifier')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Date'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Date: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Date')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Series Identifier'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Series Identifier: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Series Identifier')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview ARK Identifier'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview ARK Identifier: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview ARK Identifier')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interviewee First Name'))): ?>
<div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interviewee Name: </h4></td><td style="width:300px;text-align:left;">
<?php if(metadata('item', array('Item Type Metadata', 'Interviewee First Name'))): ?>
<?php echo metadata('item', array('Item Type Metadata', 'Interviewee First Name')); ?> <?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interviewee Middle Name'))): ?>
<?php echo metadata('item', array('Item Type Metadata', 'Interviewee Middle Name')); ?> 
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interviewee Last Name'))): ?>
<?php echo metadata('item', array('Item Type Metadata', 'Interviewee Last Name')); ?>
<?php endif; ?>
</td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interviewer First Name'))): ?>
<div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interviewer Name: </h4></td><td style="width:300px;text-align:left;">
<?php if(metadata('item', array('Item Type Metadata', 'Interviewer First Name'))): ?>
<?php echo metadata('item', array('Item Type Metadata', 'Interviewer First Name')); ?> <?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interviewee Middle Name'))): ?>
<?php echo metadata('item', array('Item Type Metadata', 'Interviewee Middle Name')); ?> 
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interviewer Last Name'))): ?>
<?php echo metadata('item', array('Item Type Metadata', 'Interviewer Last Name')); ?>
<?php endif; ?>
</td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Summary'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Summary: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Summary')); ?></td></tr></table></div>
<?php endif; ?>
<?php if ($inlcsubject = metadata('item', array('Item Type Metadata', 'Interview LC Subject'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview LC Subject:</h4></td><td style="width:300px;text-align:left;">
<?php echo $inlcsubject; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Location'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Location: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Location')); ?></td></tr></table></div>
<?php endif; ?>
<?php if ($inkeyword = metadata('item', array('Item Type Metadata', 'Interview Keyword'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Keyword:</h4></td><td style="width:300px;text-align:left;">
<?php echo $inkeyword; ?></td></tr></table>
</div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Extra Tags'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Extra Tags: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Extra Tags')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Series'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Series: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Series')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Language Terms'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Language Terms: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Language Terms')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Media Identifier'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Link to Interview Media File: </h4></td><td style="width:300px;text-align:left;"><a href="http://athena.uky.edu/audio/oralhist/<?php echo metadata('item', array('Item Type Metadata', 'Interview Media Identifier')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Interview Media Identifier')); ?></a></a></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Online Access'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Online Access: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Online Access')); ?></td></tr></table></div>
<?php endif; ?>



            </div>
            <div id="view2">
<!-- Collections Description Tab -->
<?php if(metadata('item', array('Item Type Metadata', 'Collection Summary'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Summary: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Summary')); ?></td></tr></table></div>
<?php endif; ?>

<?php if ($ckeyword = metadata('item', array('Item Type Metadata', 'Collection Keyword'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Keyword:</h4></td><td style="width:300px;text-align:left;">
<?php echo $ckeyword; ?></td></tr></table>
</div>
<?php endif; ?>
<?php if ($clcsubject = metadata('item', array('Item Type Metadata', 'Collection LC Subject'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection LC Subject:</h4></td><td style="width:300px;text-align:left;">
<?php echo $clcsubject; ?></td></tr></table>
</div>
<?php endif; ?>
<?php if ($ctheme = metadata('item', array('Item Type Metadata', 'Collection Theme'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Theme:</h4></td><td style="width:300px;text-align:left;">
<?php echo $ctheme; ?></td></tr></table>
</div>
<?php endif; ?>

<!-- Series Description Tab -->

<?php if ($skeyword = metadata('item', array('Item Type Metadata', 'Series Keyword'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Keyword:</h4></td><td style="width:300px;text-align:left;">
<?php echo $skeyword; ?></td></tr></table>
</div>
<?php endif; ?>
<?php if ($slcsubject = metadata('item', array('Item Type Metadata', 'Series LC Subject'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series LC Subject:</h4></td><td style="width:300px;text-align:left;">
<?php echo $slcsubject; ?></td></tr></table>
</div>
<?php endif; ?>
<?php if ($stheme = metadata('item', array('Item Type Metadata', 'Series Theme'), array('delimiter'=>', '))): ?>
<div class="item-description-static">
<table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Theme:</h4></td><td style="width:300px;text-align:left;">
<?php echo $stheme; ?></td></tr></table>
</div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Series Summary'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Summary: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Summary')); ?></td></tr></table></div>
<?php endif; ?>


<!-- Interview Description Tab -->

<?php if(metadata('item', array('Item Type Metadata', 'Interview Featured Image'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Featured Image: </h4></td><td style="width:300px;text-align:left;"><img src="https://oralhistory.uky.edu/spokedb/oh-files/images/<?php echo metadata('item', array('Item Type Metadata', 'Interview Featured Image')); ?>.jpg" width="150px" height="150px"/></td></tr></table></div>
<?php endif; ?>









            </div>
            <div id="view3">


<!-- Collections Rights & Usage Tab -->
<?php if(metadata('item', array('Item Type Metadata', 'Collection Suppressed'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Suppressed: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Suppressed')); ?></td></tr></table></div>
<?php endif; ?>



<?php if(metadata('item', array('Item Type Metadata', 'Collection Notes on Rights and Usage'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Notes on Rights and Usage: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Notes on Rights and Usage')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Collection Notes on Rights and Usage')); ?></td></tr></table></div>
<?php endif; ?>



<!-- Series Rights & Usage Tab -->
<?php if(metadata('item', array('Item Type Metadata', 'Series Suppressed'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Suppressed: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Suppressed')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Series Release'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Release: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Release')); ?></td></tr></table></div>
<?php endif; ?>


<!-- Interviews Rights & Usage Tab -->
<?php 
$type = $item->getItemType()->name;
if ('interviews' === $type): ?>
<table class="tableizer-table">
<tr class="tableizer-firstrow">
<th>No Paperwork</th>
<th>Deed of Gift</th>
<th>Rights Transferred</th>
<th>Partial Rights: Interviewee</th>
<th>Partial Rights: Interviewer</th>
<th>Interview Restricted</th>
</tr>
 <tr>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Paperwork'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Paperwork')); ?>.png"/><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Deed of Gift'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Deed of Gift')); ?>.png"/><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Rights Transferred'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Rights Transferred')); ?>.png"/><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Rights Interviewee'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Rights Interviewee')); ?>.png"/><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Rights Interviewer'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Rights Interviewer')); ?>.png"/><?php endif; ?></td>
<td><?php if(metadata('item', array('Dublin Core', 'Rights'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Dublin Core', 'Rights')); ?>.png"/><?php endif; ?></td>
</tr>
</table>
<?php endif; ?> 
<?php if(metadata('item', array('Item Type Metadata', 'Interview Suppressed'))): ?>
        <table style="background-color:#E8E8E8"><tr><td>&nbsp;&nbsp;</td><td><?php echo metadata('item', array('Item Type Metadata', 'Interview Suppressed')); ?></td><td>(<a href="#inline" data-lity>what is this?</a>)<div id="inline" style="background:#fff" class="lity-hide">a note about suppression</div></a></td></tr></table>
<?php endif; ?> 

<!--<?php if(metadata('item', array('Item Type Metadata', 'Interview Suppressed'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Suppressed: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Suppressed')); ?></td></tr></table></div>
<?php endif; ?>-->

<?php if(metadata('item', array('Item Type Metadata', 'Interview Restriction Details'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Restriction Details: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Restriction Details')); ?></td></tr></table></div>
<?php endif; ?>


<?php if(metadata('item', array('Item Type Metadata', 'Interview Rights'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Rights Description: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Rights')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Usage'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Usage Description: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Usage')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Notes on Rights and Usage'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Notes on Rights and Usage: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Notes on Rights and Usage')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Release'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Release: </h4></td><td style="width:300px;text-align:left;"><a href="https://oralhistory.uky.edu/spokedb/oh-files/release/<?php echo metadata('item', array('Item Type Metadata', 'Interview Release')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Interview Release')); ?></a></td></tr></table></div>
<?php endif; ?>






            </div>
            <div id="view4">
<!-- Collections Transcript Tab -->



<!-- Series Transcript Tab -->




<!-- Interviews Transcript Tab -->

<?php 
$type = $item->getItemType()->name;
if ('interviews' === $type): ?>
<table class="tableizer-table">
<tr class="tableizer-firstrow">
<th>Transcript Digital</th>
<th>Transcript Translation</th>
<th>Transcript</th>
<th>Typescript</th>
</tr>
 <tr>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Digital'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Digital')); ?>.png"/><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Translation'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Translation')); ?>.png"/><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript')); ?>.png"/><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Interview Typescript'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Interview Typescript')); ?>.png"/><?php endif; ?></td>
</tr>
</table>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Indexed'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Indexed: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Indexed')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Status'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript Status: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Status')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Date Assigned'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript Date Assigned: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Date Assigned')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Date Completed'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript Date Completed: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Date Completed')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Editor'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript Editor: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Editor')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Language'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript Language: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Language')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript State'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript State: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript State')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Text'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript Text: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Text')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript Translator'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript Translator: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript Translator')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Editor Date Assigned'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Editor Date Assigned: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Editor Date Assigned')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Editor Date Completed'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Editor Date Completed: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Editor Date Completed')); ?></td></tr></table></div>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcriptionist'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcriptionist: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcriptionist')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Translation File Name'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Translation File Name: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Translation File Name')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Typescript State'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Typescript State: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Typescript State')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Translation Date Assigned'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Translation Date Assigned: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Translation Date Assigned')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Translation Date Completed'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Translation Date Completed: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Translation Date Completed')); ?></td></tr></table></div>
<?php endif; ?>



            </div>
            <div id="view5">


<!-- Collections Technical & Preservation Tab -->



<!-- Series Technical & Preservation Tab -->




<!-- Interviews Technical & Preservation Tab -->

<?php 
$type = $item->getItemType()->name;
if ('interviews' === $type): ?>
<?php ($intech = metadata('item', array('Item Type Metadata', 'Interview Technical Overview'), array('delimiter'=>'<br/><br/>', 'no_escape' => true))) ?>
<table style="width: 100%;"><tr><td style="width:100px;text-align:left;"><h4>Interview Technical Overview:</h4></td></tr><tr></tr><td style="width:300px;text-align:left;">
<div class="item-description-static">
<div id="test">
<script type="text/javascript" src="https://oralhistory.uky.edu/renderjson.js"></script>
<script>
    document.getElementById("test").appendChild(
        renderjson(<?php echo $intech; ?>)
    );
</script>      
</td></tr></table>
</div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Digital File Name'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Digital File Name: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Digital File Name')); ?></td></tr></table></div>
<?php endif; ?>
            </div>
            <div id="view6">
                    <!-- OHMS Tab -->
<?php if(metadata('item', array('Item Type Metadata', 'Interview Transcript XML'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Transcript XML: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Transcript XML')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Cache File'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Cache File (viewer preview): </h4></td></tr><tr></tr><td style="width:300px;text-align:left;"><p><div xmlns="https://www.w3.org/1999/xhtml"><iframe src='https://oralhistory.uky.edu/oh/render.php?cachefile=<?php echo metadata('item', array('Item Type Metadata', 'Interview Cache File')); ?>.xml' width='1040px' height='785px' frameborder='0' name="viewer" scrolling="no" ></iframe></div></p></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Index XML'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Index XML: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Index XML')); ?></td></tr></table></div>
<?php endif; ?>
            </div>
            <div id="view7">
<!-- Collections Links Tab -->
<?php 
$type = $item->getItemType()->name;
if ('collections' === $type): ?>
<?php if(metadata('item', array('Item Type Metadata', 'Collection Release'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Release: </h4></td><td style="width:300px;text-align:left;"><a href="https://oralhistory.uky.edu/spokedb/oh-files/<?php echo metadata('item', array('Dublin Core', 'Identifier')); ?>/<?php echo metadata('item', array('Item Type Metadata', 'Collection Release')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Collection Release')); ?></a></td></tr></table></div>
<?php endif; ?>
<?php endif; ?>
<?php 
$type = $item->getItemType()->name;
if ('series' === $type): ?>
<!-- Series Links Tab -->
<?php if(metadata('item', array('Item Type Metadata', 'Series Release'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Release: </h4></td><td style="width:300px;text-align:left;"><a href="https://oralhistory.uky.edu/spokedb/oh-files/<?php echo metadata('item', array('Dublin Core', 'Identifier')); ?>/<?php echo metadata('item', array('Item Type Metadata', 'Series Release')); ?>"><?php echo metadata('item', array('Item Type Metadata', 'Series Release')); ?></a></td></tr></table></div>
<?php endif; ?>
<?php endif; ?>
<!-- Interviews Links Tab -->
<?php 
$type = $item->getItemType()->name;
if ('interviews' === $type): ?>


<?php if(metadata('item', array('Item Type Metadata', 'Interview Cache File'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Cache File: </h4></td><td style="width:300px;text-align:left;"><a href="https://oralhistory.uky.edu/spokedb/xml/<?php echo metadata('item', array('Item Type Metadata', 'Interview Cache File')); ?>.xml"><?php echo metadata('item', array('Item Type Metadata', 'Interview Cache File')); ?>.xml</a></td></tr></table></div>
<?php endif; ?>



<?php endif; ?>
            </div>
            <div id="view8">
<!-- Collections Workflow Tab -->
<?php 
$type = $item->getItemType()->name;
if ('collections' === $type): ?>
<table class="tableizer-table">
<tr class="tableizer-firstrow">
<th>Collection Record in AT</th>
<th>Collection Finding Aid</th>
<th>Collection MARC Record</th>
</tr>
 <tr>
<td><?php if(metadata('item', array('Item Type Metadata', 'Collection Record in AT'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Collection Record in AT')); ?>.png"/><?php endif; ?><br/><?php if(metadata('item', array('Item Type Metadata', 'Collection Record in AT Date'))): ?><?php echo metadata('item', array('Item Type Metadata', 'Collection Record in AT Date')); ?><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Collection Finding Aid'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Collection Finding Aid')); ?>.png"/><?php endif; ?><br/><?php if(metadata('item', array('Item Type Metadata', 'Collection Finding Aid Date'))): ?><?php echo metadata('item', array('Item Type Metadata', 'Collection Finding Aid Date')); ?><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Collection MARC Record'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Collection MARC Record')); ?>.png"/><?php endif; ?><br/><?php if(metadata('item', array('Item Type Metadata', 'Collection MARC Record Date'))): ?><?php echo metadata('item', array('Item Type Metadata', 'Collection MARC Record Date')); ?><?php endif; ?></td>
</tr>
</table>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Collection Processing Overview'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Collection Processing Overview: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Collection Processing Overview')); ?></td></tr></table></div>
<?php endif; ?>




<!-- Series Workflow Tab -->
<?php 
$type = $item->getItemType()->name;
if ('series' === $type): ?>
<table class="tableizer-table">
<tr class="tableizer-firstrow">
<th>Series Record in AT</th>
<th>Series Finding Aid</th>
<th>Series MARC Record</th>
</tr>
 <tr>
<td><?php if(metadata('item', array('Item Type Metadata', 'Series Record in AT'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Series Record in AT')); ?>.png"/><?php endif; ?></br/><?php if(metadata('item', array('Item Type Metadata', 'Series Record in AT Date'))): ?><?php echo metadata('item', array('Item Type Metadata', 'Series Record in AT Date')); ?><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Series Finding Aid'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Collection Finding Aid')); ?>.png"/><?php endif; ?></br/><?php if(metadata('item', array('Item Type Metadata', 'Series Finding Aid Date'))): ?><?php echo metadata('item', array('Item Type Metadata', 'Series Finding Aid Date')); ?><?php endif; ?></td>
<td><?php if(metadata('item', array('Item Type Metadata', 'Series MARC Record'))): ?><img src="https://oralhistory.uky.edu/<?php echo metadata('item', array('Item Type Metadata', 'Series MARC Record')); ?>.png"/><?php endif; ?></br/><?php if(metadata('item', array('Item Type Metadata', 'Series MARC Record Date'))): ?><?php echo metadata('item', array('Item Type Metadata', 'Series MARC Record Date')); ?><?php endif; ?></td>
</tr>
</table>
<?php endif; ?>

<?php if(metadata('item', array('Item Type Metadata', 'Series Processing Overview'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Series Processing Overview: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Series Processing Overview')); ?></td></tr></table></div>
<?php endif; ?>


<!-- Interviews Workflow Tab-->




<?php if(metadata('item', array('Item Type Metadata', 'Interview Workflow Date Completed'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Workflow Date Completed: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Workflow Date Completed')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Workflow Finalized'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Workflow Finalized: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Workflow Finalized')); ?></td></tr></table></div>
<?php endif; ?>
<?php if(metadata('item', array('Item Type Metadata', 'Interview Workflow Main'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Workflow Main: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Workflow Main')); ?></td></tr></table></div>
<?php endif; ?>




<?php if(metadata('item', array('Item Type Metadata', 'Interview Notes'))): ?>
        <div class="item-description-static"><table style="width:100%;text-align:left;"><tr><td style="width:100px;text-align:left;"><h4>Interview Notes: </h4></td><td style="width:300px;text-align:left;"><?php echo metadata('item', array('Item Type Metadata', 'Interview Notes')); ?></td></tr></table></div>
<?php endif; ?>
            </div>
            <div id="view9">
            <!--<p>
            <?php if(metadata('item', array('Dublin Core', 'Rights'))): ?>
        <div class="element-text"><pre>{"interviewti_display":"<?php echo metadata ('item', array('Item Type Metadata', 'Interview Title')); ?>","interviewid_display":"<?php echo metadata ('item', array('Item Type Metadata', 'Interview Accession Number')); ?>","id:"<?php echo metadata ('item', array('Dublin Core', 'Identifier')); ?>"}</pre><br/><br/></div>
<?php endif; ?>
</p>-->
<p><a href="https://oralhistory.uky.edu/spokedb/admin/items/browse?search=&advanced%5B0%5D%5Belement_id%5D=43&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=<?php echo metadata('item', array ('Dublin Core', 'Identifier')); ?>&range=&collection=&type=&tags=&featured=&submit_search=Search" target="_blank">Edit this record.</a> (<span style="color: red;">authentication required</span>)</p>
<p>Delete a record from the SPOKEdb public interface at https://kentuckyoralhistory.org (<span style="color: red;">controlled by IP restriction and LDAP</span>)</p>
<p><A href="https://docs.google.com/spreadsheets/d/1-CkmS0a1s_ZUOFDzgRMeNRLwHZyikG712YRYFJAoLCo/edit#gid=0" target="_blank">SPOKEdb Technical Metadata Specification</a></p>
<p>SPOKEdb User Guide</p> 
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

   <!--<?php if(metadata('item','Collection Name')): ?>
      <br/><br/><div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
      </div>
   <?php endif; ?>-->
   


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
