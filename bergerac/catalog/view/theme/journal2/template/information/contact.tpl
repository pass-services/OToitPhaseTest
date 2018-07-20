<?php if (!isset($is_j2_popup)): ?>
<?php echo $header; ?>
<div id="container" class="container j-container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo $breadcrumb['href']; ?>" itemprop="url"><span itemprop="title"><?php echo $breadcrumb['text']; ?></span></a></li>
    <?php } ?>
  </ul>
  <div class="row">  <?php echo $column_left; ?><?php echo $column_right; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?> contact-page">
      <h1 class="heading-title"><?php echo $heading_title; ?></h1>

	  
	  
	  <div class="row">
	  <div class="col-sm-3 col"><strong><?php echo $store; ?></strong><br />
              <address>
			  
              <?php echo $address; ?>
              </address>
              <br>
			  <strong><?php echo $text_telephone; ?></strong><br>
              <?php echo $telephone; ?><br />
            </div>
		<div class="col-sm-9 ">
			   <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <?php if (isset($product_id) && $product_id): ?>
          <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
          <?php endif; ?>
          <?php if (!isset($is_j2_popup)): ?>
          <h2 class="secondary-title"><?php echo $text_contact; ?></h2>
          <?php endif; ?>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
            <div class="col-sm-10">
              <input type="text" name="name" value="<?php echo $name; ?>" id="input-name" class="form-control" />
              <?php if ($error_name) { ?>
              <div class="text-danger"><?php echo $error_name; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email"><?php echo $entry_email; ?></label>
            <div class="col-sm-10">
              <input type="text" name="email" value="<?php echo $email; ?>" id="input-email" class="form-control" />
              <?php if ($error_email) { ?>
              <div class="text-danger"><?php echo $error_email; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-enquiry"><?php echo $entry_enquiry; ?></label>
            <div class="col-sm-10">
              <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"><?php echo $enquiry; ?></textarea>
              <?php if ($error_enquiry) { ?>
              <div class="text-danger"><?php echo $error_enquiry; ?></div>
              <?php } ?>
            </div>
          </div>
          <?php if (version_compare(VERSION, '2.0.2', '<')): ?>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-captcha"><?php echo $entry_captcha; ?></label>
            <div class="col-sm-10">
              <input type="text" name="captcha" id="input-captcha" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 pull-right">
              <img src="index.php?route=tool/captcha" alt="" />
              <?php if ($error_captcha) { ?>
              <div class="text-danger"><?php echo $error_captcha; ?></div>
              <?php } ?>
            </div>
          </div>
          <?php elseif (version_compare(VERSION, '2.1', '<')): ?>
          <?php if ($site_key) { ?>
            <div class="form-group g-capthca">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                <?php if ($error_captcha) { ?>
                  <div class="text-danger"><?php echo $error_captcha; ?></div>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
          <?php else: ?>
          <?php echo $captcha; ?>
          <?php endif; ?>
        </fieldset>
        <?php if (!isset($is_j2_popup)): ?>
        <div class="buttons">
          <div class="pull-right">
            <input class="btn btn-primary button" type="submit" value="<?php echo $button_submit; ?>" />
          </div>
        </div>
        <?php endif; ?>
      </form>
			</div>
		     </div>



	 <?php echo $content_top; ?>
   
<?php echo $footer; ?>
<?php endif; ?>
