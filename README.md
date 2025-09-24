
# Orientação a Objetos em Python

Este documento apresenta os principais conceitos de Orientação a Objetos (OO) aplicados à linguagem Python, com exemplos teóricos e práticos.

## O que é Orientação a Objetos?

Orientação a Objetos é um paradigma de programação qe organiza o código em torno de objetos, que representam entidades do mundo real ou conceitos abstratos. Cada objeto possui atributos (dados) e métodos (funções).

## Vantagens da Orientação a Objetos

- **Reutilização de código**: Classes podem ser reutilizadas e estendidas.
- **Organização**: Facilita a estruturação de sistemas complexos.
- **Manutenção**: Torna o código mais fácil de modificar e expandir.
- **Encapsulamento**: Protege os dados internos dos objetos.

## Principais Conceitos

- **Classe**: Modelo para criar objetos.
- **Objeto**: Instância de uma classe.
- **Atributos**: Características dos objetos.
- **Métodos**: Comportamentos dos objetos.
- **Herança**: Permite que uma classe herde características de outra.
- **Polimorfismo**: Permite que métodos com o mesmo nome tenham comportamentos diferentes.
- **Encapsulamento**: Restringe o acesso direto aos dados do objeto.

## Exemplo Simples em Python

```python
class Pessoa:
    def __init__(self, nome, idade):
        self.nome = nome
        self.idade = idade
    def apresentar(self):
        print(f"Olá, meu nome é {self.nome} e tenho {self.idade} anos.")

p1 = Pessoa("Maria", 30)
p1.apresentar()
```

## Referências

- [Python Orientado a Objetos](Python%20Orientado%20a%20Objetos/)
- [POO Teoria 01a - Vantagens Orientação a Objetos](Python%20Orientado%20a%20Objetos/POO%20Teoria%2001a%20-%20Vantagens%20Orientação%20a%20Objetos.md)
- [POO Teoria 02a - Objetos e Classes](Python%20Orientado%20a%20Objetos/POO%20Teoria%2002a%20-%20Objetos%20e%20Classes.md)
- [POO Teoria 03a - UML](Python%20Orientado%20a%20Objetos/POO%20Teoria%2003a%20-%20UML.md)
- [POO Teoria 04a - Métodos Especiais](Python%20Orientado%20a%20Objetos/POO%20Teoria%2004a%20-%20Métodos%20Especiais.md)

---

Este README foi gerado automaticamente para auxiliar nos estudos de Programação Orientada a Objetos com Python.
