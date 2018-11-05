<html>
<head>
<title>My Form</title>
</head>
<body>

<?php  
// fungsi set_value akan menghasilkan nilai yang sebelumnya telah kita tulis dan kirim.
?>

<?php echo form_open('form'); ?>

<?= form_error('username'); ?>
<h5>Username</h5>
<input type="text" name="username" value="<?= set_value('username'); ?>" size="50" />

<?= form_error('password'); ?>
<h5>Password</h5>
<input type="text" name="password" value="<?= set_value('password'); ?>" size="50" minlength="4" maxlength="12" />

<?= form_error('passconf'); ?>
<h5>Password Confirm</h5>
<input type="text" name="passconf" value="<?= set_value('passconf'); ?>" size="50" />

<?= form_error('email'); ?>
<h5>Email Address</h5>
<input type="text" name="email" value="<?= set_value('email'); ?>" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>