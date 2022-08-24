Definição:
    - É uma fachada arquitetural de um sistema, ou seja, uma pequena parte do sistema que serve como camada para outras partes da aplicação. Quando se precisa usar esses subsistemas, trabalha-se diretamente com a fachada.

Elementos:
    - Facade: Responsável por abstrair as classes de subsistemas.
    - Classes de subsistemas e módulos/bibliotecas - São todas as classes das quais um facade faz uso.

Aplicabilidade:
    - Normalmente usamos essa camada de fachada, quando possuímos subsistemas, ou módulos de bibliotecas ou classses que possuem uma certa complexidade para seu uso e desejamos simplificar.

Curiosidades:
    - Trabalha-se em um nível mais alto da aplicação e seu papel é simplificar o uso de módulos, subsistemas ou classes mais complexas.
    - Geralmente a camada de fachada é construída sobre uma única classe.

Vantagens:
    - Você pode isolar seu código da complexidade de um subsistema.

Desvantagens:
    -  Uma fachada pode se tornar um objeto "Deus" acoplado a todas as classes de uma aplicação.

