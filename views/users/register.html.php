<h1><?=$this->title('Register')?></h1>
<?php
echo $this->form->create();
echo $this->form->field('username');
echo $this->form->field('password', array('type' => 'password'));
echo $this->form->field('email');
echo $this->form->submit('save');
echo $this->form->end();
?>