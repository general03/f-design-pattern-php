<?php
 
  require(dirname(__FILE__).'/singleton.php');
 
  $singleton_1 = Singleton::getInstance();
  $singleton_2 = Singleton::getInstance();
 
  var_dump(spl_object_id($singleton_1));
 
  var_dump(spl_object_id($singleton_2));

//   var_dump(new Singleton());


  require(dirname(__FILE__).'/factory.php');

  $factory1 = TodoFactory::create('My list 1');
  var_dump($factory1->getText());
  $factory2 = TodoFactory::create('My list 2');
  var_dump($factory2->getText());

  var_dump(spl_object_id($factory1), spl_object_id($factory2));


  require(dirname(__FILE__).'/di.php');
  
  $card1 = new Task();
  $card1->name = 'Faire ma veille';
  $todo = new Todo($card1);
  var_dump($todo->getContent());

  $card2 = new Task();
  $card2->name = 'Soumettre mon brief';
  $card2->priority = 5;
  $todo = new Todo($card2);
  var_dump($todo->getContent());


  require(dirname(__FILE__).'/dao.php');

  $user = new UserDao();
  var_dump($user->getPseudoUser('david'));


  require(dirname(__FILE__).'/observer-client.php');
  require(dirname(__FILE__).'/observer-server.php');

  $usersRepository = new UsersRepository();
  $message = new Message();
  $usersRepository->attach($message);

  $user = new User('David', 'david@simplon.co');
  $usersRepository->createUser($user);
?>