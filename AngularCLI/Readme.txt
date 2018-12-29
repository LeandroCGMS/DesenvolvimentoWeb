No Linux, quando o ng serve ou qualquer outro programa que precisa escutar alterações em um ou mais arquivos
, não detectar as alterações do código, devemos criar um script de inicialização com o seguinte comando, echo fs.inotify.max_user_watches=582222 | sudo tee -a /etc/sysctl.conf && sudo sysctl -p
echo fs.inotify.max_user_watches=582222 | sudo tee -a /etc/sysctl.conf && sudo sysctl -p
Isso é mostrado no Viva Linux:
Porém o Ubuntu e Debian não tem esse arquivo, então como fazer??? Muito simples. Basta você criar seu script dentro da pasta /etc/init.d. Exemplo:

# joe /etc/init.d/meuscript 

#!/bin/bash 

echo "Olá mundo"

Agora é só dar a permissão para execução: 

# chmod 755 /etc/init.d/meuscript 

Quase pronto, agora é só colocar para inicializar junto com o sistema: 

# update-rc.d meuscript defaults 

É isso aí galera, felicidade a todos! 


Em https://www.vivaolinux.com.br/dica/Colocando-script-na-inicializacao-do-Linux-(Ubuntu-Debian) e https://stackoverflow.com/questions/34662574/node-js-getting-error-nodemon-internal-watch-failed-watch-enospc
