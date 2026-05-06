# 💱 Conversor de Monedas en PHP

> Proyecto personal de aprendizaje para volver a coger el hábito de programar. Hecho con PHP, CSS y JavaScript vanilla. Puede tener fallos, está hecho con ganas más que con perfección.

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=flat-square&logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?style=flat-square&logo=javascript&logoColor=black)
![CSS](https://img.shields.io/badge/CSS-3-1572B6?style=flat-square&logo=css3&logoColor=white)
![Estado](https://img.shields.io/badge/Estado-En%20desarrollo-orange?style=flat-square)

---

## 🚀 ¿Qué hace?

Permite convertir entre distintas divisas (USD, EUR, GBP, JPY) utilizando tasas de cambio reales obtenidas a través de una API externa. Guarda además un historial de las últimas conversiones directamente en el navegador.

---

## ✨ Funcionalidades

- 🔄 Conversión entre divisas en tiempo real via API externa
- ⇅ Botón para intercambiar moneda de origen y destino
- 🕐 Historial de las últimas 5 conversiones (guardado en localStorage)
- ✅ Validación del formulario antes de enviar
- 🎞️ Animación suave al mostrar el resultado

---

## 🛠️ Tecnologías usadas

| Tecnología | Uso |
|---|---|
| PHP (sin framework) | Lógica del servidor y llamadas a la API |
| HTML + CSS | Estructura y estilos |
| JavaScript (vanilla) | Interactividad y historial |
| API externa | Tasas de cambio en tiempo real |

---

## ⚙️ Cómo arrancarlo en local

Necesitas tener **PHP instalado**. Luego desde la raíz del proyecto:

```bash
git clone git@github.com:tuusuario/Conversor-de-Monedas-en-PHP.git
cd Conversor-de-Monedas-en-PHP
php -S localhost:8000
```

Abre el navegador en [http://localhost:8000](http://localhost:8000)

---

## 📁 Estructura del proyecto

```
Conversor-de-Monedas-en-PHP/
├── index.php               # Archivo principal y vista
├── style/
│   └── index.css           # Estilos
├── js/
│   └── script.js           # Lógica del cliente
├── controllers/
│   └── ExchangeRateContoller.php  # Controlador de la API
├── models/
│   └── ExchangeRate.php    # Modelo de datos
└── config/                 # Configuración
```

---

## ⚠️ Aviso

Este proyecto está hecho con fines de **aprendizaje personal**. No está pensado para uso en producción y seguramente tiene más de un fallo. Cualquier sugerencia o mejora es bienvenida, abre un issue o un PR sin compromiso. 