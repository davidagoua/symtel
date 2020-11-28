# symtel
Ce package Laravel vous permet d'utliser le sevice d'envoie de SMS de la societé Symtel
Pour Integrer ce pakage a votre projet Laravel veuillez suivre ces étapes:

1- Enregistrer 'Davidagoua\SymtelServiceProvider' dans le fichier `config/app.php`:
2- Renseigner les identifiant symtel like that:
`
SYMTEL_USERNAME=username
SYMTEL_PASSWORD=password
SYMTEL_SHORTNAME=shortname
`

3- Envoyer des sms
`

class MyController extends Controller{
  
  //envoyer un message
  public function sendsms(Request $request, SymtelSender $sender){
    $sender->send('+22500000000', "message");
  }
  
  //consulter le nombre de sms restant
  public function sendsms(Request $request, SymtelSender $sender){
    dd($sender->credit);
  }

} 


`
