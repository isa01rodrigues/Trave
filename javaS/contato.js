/*************************** */
// ENVIAR DADOS DO FORM POR WHATSAPP
function EnviarWhats() {
    alert('bem-sucedido! Redirecionando...');


    let assunto = '*Site - Travelers Company';
    let nome = '*Nome:* ' + document.querySelector('#nome').value;
    let email = '*Email:* ' + document.querySelector('#email').value;
    let fone = '*Telefone:* ' + document.querySelector('#telefone').value; // Corrigido o seletor para '#telefone'
    let mesn = '*Mensagem:* ' + document.querySelector('#mens').value;
   
    let numeroWhats = '5511964086983';

    let quebraDeLinha = '%0A';

    window.open('https://api.whatsapp.com/send?phone=5511964086983' + numeroWhats + '&text=' +
        assunto + quebraDeLinha + quebraDeLinha +
        nome + quebraDeLinha +
        email + quebraDeLinha +
        fone + quebraDeLinha +
        mesn, '_blank');

}
