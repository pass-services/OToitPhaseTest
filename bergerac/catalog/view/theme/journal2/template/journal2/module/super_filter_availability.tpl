<div class="box sf-availability <?php echo $is_collapsed ? 'is-collapsed' : ''; ?>" data-id="availability">
    <div class="box-heading"><?php echo $this->journal2->settings->get('filter_availability_text', 'Disponibilité'); ?></div>
    <div class="box-content">
        <ul>
            <li><label><input type="checkbox" value="1" <?php echo $availability_yes ? 'checked' : '' ?>><span class="sf-name"><?php echo $this->journal2->settings->get('filter_availability_yes_text', 'Disponible'); ?></span></label></li>
            <li><label><input type="checkbox" value="0" <?php echo $availability_no ? 'checked' : '' ?>><span class="sf-name"><?php echo $this->journal2->settings->get('filter_availability_no_text', 'Indisponible'); ?></span></label></li>
        </ul>
    </div>
</div>