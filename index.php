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


  // require(dirname(__FILE__).'/dao.php');

  // $user = new UserDao();
  // var_dump($user->getPseudoUser('david'));


  // require(dirname(__FILE__).'/observer-client.php');
  // require(dirname(__FILE__).'/observer-server.php');

  // $usersRepository = new UsersRepository();
  // $message = new Message();
  // $usersRepository->attach($message);

  // $user = new User('David', 'david@simplon.co');
  // $usersRepository->createUser($user);


  require(dirname(__FILE__).'/command.php');

  $log = new Log("Erreur dans votre application !", "WARNING");
  $invoker = new CommandInvoker(new EchoCommand($log));
  $output = $invoker->handle();
  $invoker = new CommandInvoker(new FileCommand($log));
  $output = $invoker->handle();


  require(dirname(__FILE__).'/strategy.php');

  $context = new Context(new EchoStrategy());
  $context->launchStrategy('Message to echo !');

  $context = new Context(new FileStrategy());
  $context->launchStrategy('Message to file !');



  require(dirname(__FILE__).'/decorator.php');
  $lang = new MyLanguage();
  echo $lang->display('React');

  $py = new DecoratorLanguage($lang);
  echo $py->display('python');


  require(dirname(__FILE__).'/builder.php');
  $schoolBuilder = new SchoolBuilder();
  $school = (new Director())->build($schoolBuilder);



  require(dirname(__FILE__).'/adapter.php');
  $monopoly = new Monopoly('Hasbro', 1935);
  $adapter = new GameAdapter($monopoly);
  echo $adapter->getInfo();
?>