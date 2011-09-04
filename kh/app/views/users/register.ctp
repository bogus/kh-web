<?php echo $javascript->link('prototype', false); ?>
<h2>Create an Account</h2>
<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'register')));
?>
<fieldset>
<?php
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->input('User.email');
echo $this->Form->input('User.first_name');
echo $this->Form->input('User.last_name');
echo $this->Form->input('User.city_id');
echo $this->Form->input('User.county_id');
$options = array('url' => 'getcounties', 'update' => 'UserCountyId');
echo $ajax->observeField('UserCityId', $options);
?>
</fieldset>
<?php 
echo $this->Form->end('Hesap Olustur');
?>
