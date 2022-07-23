Definição:

Defini uma base para um algoritmo que contenha partes que variam, sendo que essas variações reutilizam a base principal, que serve como uma espécie de esqueleto. A estrutura principal do algoritmo não se altera.

Temos uma classe abstrata que possui um método concreto chamado de "template method", dentro do qual existe chamada para outros métodos abstratos da classe. Esse método também define a ordem das chamadas.

A parte do algoritmo que varia fica implementado nas subclasses.

Customização:
    Pode-se utilizar hook metodo que permite que alguma subclasse utilize, implementando a sua lógica. Este hook metodo é chamado na classe abstrata pelo metodo template. E a sua implementação é opcional. Na classe abstrata ele é definido como um metodo concreto e costuma retornar um valor padrão, aí nas subclasses ele é sobrescrito, realizando o algoritmo específico.

Vantagens:
    * Aumenta o reaproveitamento de código, já que é diminuida a duplicação de partes do algoritmo.

Desvantagens:
    * Depuração e entendimento do fluxo da implementação do template method pode ser um pouco confuso, dificultando a manutenção.

