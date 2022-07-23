Definição:
    - Defini uma família de algoritmos que executam operações semelhantes, mas com diferenças em sua implementação. A ideia é encapsular cada um desses algoritmos e permitir que sejam utilizados por qualquer cliente e que esses comportamentos possam ser trocados em tempo de execução.

Elementos:
    - Context -> responsável por criar e manter uma instância de nosso strategy
    - Strategy -> Serve de contrato para as ConcreteStrategies e a classe Context. Pode ser do tipo interface ou abstrata.
    - ConcreteStrategy -> É a classe responsável por implementar a interface Strategy.

Curiosidade:
    - Também é conhecido como Policy.
    - Quando usamos muitos ifs ou switch case para condicionar execução de algoritmos semelhantes e com mesma finalidade, pode ser uma boa considerar o uso do strategy.
    - Na classe que serve de interface para garantir a integridade dos metodos a serem chamados na classe contexto e implementados nas subclasses pelas classes strategies, essa classe pode ser do tipo interface ou abstrata. Quando se quer um algoritmo em comum a todas as subclasses, é relevante utilizar uma classe abstrata com a implementação desse algoritmos.

Vantagens:
    - Possibilita a diminuição do uso de IFs e diminui a implementação de comportamentos em uma classe só, permitindo esses comportamentos serem implementados em classes isoladas.
    - Facilita o conceito de responsabilidade única isolando o comportamento por classes.
    - Facilita a manutenção.

Desvantagens:
    - Aumento no número de classes existentes no sistema.
    - Aumento da complexidade de criação dos objetos.