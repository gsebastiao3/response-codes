# Response Codes

Biblioteca PHP para padronizar códigos de resposta multilíngue (code, icon, title, message).  
Suporta mensagens em **inglês (en)**, **português (pt)** e **espanhol (es)**.

---

## 🚀 Instalação

Via [Composer](https://getcomposer.org):

```bash
composer require gsebastiao3/response-codes

# Uso

use ResponseCodes\ResponseCodes;

// Exemplo: obter resposta para erro 500 em português
$response = ResponseCodes::get(500, 'pt');

# Saída:
# {
#   "code": 500,
#   "icon": "error",
#   "title": "Erro interno do servidor",
#   "message": "Mensagem genérica de erro, usada quando nenhuma mensagem mais específica é adequada."
# }

# Idiomas suportados
# - en → Inglês
# - pt → Português
# - es → Espanhol
# Se o idioma não for encontrado, retorna em inglês por padrão.

