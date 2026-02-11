# 🚀 Vortex Digital - Landing Page (Teste Front-End - Ellos Design)

Bem-vindo(a) ao repositório da Vortex Digital, uma landing page desenvolvida como parte de um teste técnico para a vaga de Estágio Front-End, com foco em experiência do usuário, responsividade e integração com banco de dados.

## 📌 Sobre o Projeto

A landing page Vortex Digital foi criada para apresentar uma agência fictícia especializada em marketing digital, performance, SEO e mídia paga.

## 📸 Preview do Projeto

![Vortex Digital Preview](preview-vortex.png)

### O projeto destaca:

- Seção Hero com formulário funcional

- Seção Sobre com estatísticas da empresa

- Seção de Benefícios / Serviços

- FAQ interativo com accordion

- Menu mobile responsivo

- Header com efeito ao scroll

- Formulário funcional com gravação no banco de dados

- Design moderno e responsivo

- Animações com JavaScript (Intersection Observer)

## 🛠️ Tecnologias Utilizadas

- HTML5

- SCSS (Sass)

- JavaScript (Vanilla JS)

- PHP

- MySQL

- PDO (conexão segura com banco de dados)

## 💻 Como Executar Localmente

Siga os passos abaixo para rodar o projeto no seu computador:

### 1. Clonar o repositório
``` bash
git clone https://github.com/CaueGPF/teste-frontend-developer.git
```
### 2. Configurar servidor local

Instale o Laragon ou XAMPP

Coloque a pasta do projeto dentro de:
``` bash
www/ (Laragon)
ou
htdocs/ (XAMPP)
```
### 3. Criar o banco de dados

Acesse o phpMyAdmin e execute:
``` sql
CREATE DATABASE ellos_db;
```

Crie a tabela leads:
``` sql
CREATE TABLE leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    telefone VARCHAR(20),
    mensagem TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
### 4. Configurar conexão com o banco

No arquivo **includes/db.php**, configure:
``` php
$host = 'localhost';
$db   = 'ellos_db';
$user = 'root';
$pass = '';
```
### 5. Abrir no navegador
``` bash
http://localhost/ellos-test/
```

Preencha o formulário e verifique os dados sendo gravados corretamente no banco de dados.

🌐 Deploy

### O projeto está hospedado em:

👉 (https://vortex-digital-cauegpf.infinityfree.me)

Banco de dados configurado em hospedagem remota via InfinityFree.

## 👨‍💻 Autor

**Cauê Gonçalves Pestile Fernandes**
  [Linkedin](https://www.linkedin.com/in/cauegpf/) | [GitHub](https://github.com/CaueGPF)

Agradeço a oportunidade de participar deste teste técnico.
Este projeto foi desenvolvido com dedicação, aplicando boas práticas de organização, responsividade e integração full-stack.
