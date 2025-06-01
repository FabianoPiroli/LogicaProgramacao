#include <stdio.h>
#include <stdlib.h>

int main ()
{
    int hora_cinema = 20;
    int hora_atual = 20;

    // Posso entrar no cinema?
    if (hora_atual > hora_cinema + 30)
    {
        printf("Passou do tempo limite! Não pode entrar!");
      
    } else if (hora_atual < hora_cinema - 30)
    {
        printf ("Nem abriu a porta do cinema!");
    } else ("O horário está certo! Pode entrar!");
    
    return 0;
}