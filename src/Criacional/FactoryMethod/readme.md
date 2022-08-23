Definição:
    - Encapsular a criação e os objetos de um sistema, por meio de outros objetos chamados de fábricas.

Elementos:
    - Product -> Define uma interface de objetos que será criado pelo método-fábrica(Método que fica no ConcreteCreator).
    - ConcreteProduct -> Produto concreto que implementa a interface Product. Também é o produto final criado pelas fábricas.
    - Creator -> É a interface que define o contrato de nossas fábricas.
    - ConcreteCreator -> É a classe concreta que implementa nossa interface Creator, representa a fábrica de objetos de cada produto.

Curiosidade:
    - É possível implementar uma variação para que cada ConcreteCreator seja responsável por construir um único tipo de objeto.
    - É possível implementar uma variação para que todos os objetos sejam criados em uma única classe fábrica.
    - O Factory Method é uma especialização do Template Method. Ao mesmo tempo, o Factory Method pode servir como uma etapa em um Template Method grande.

Vantagens:
    - Evita acoplamentos firmes entre criador e os produtos concretos.
    - SOLID - Favorece o SRP. Você pode mover o código de criação do produto para um único local do programa, facilitando a manutenção do código.
    - SOLID - Favorece o OCP. Você pode introduzir novos tipos de produtos no programa sem quebrar o código cliente existente.
    - Evita utilizar o operador new diretamente.

Desvantagens:
    - O código pode se tornar mais complicado, pois você precisa introduzir muitas subclasses novas para implementar o padrão. O melhor cenário é quando você está introduzindo o padrão em uma hierarquia existente de classes criadoras.