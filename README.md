# 📊 Sistema de Gestión de Microcréditos

Aplicación web desarrollada en PHP para la gestión de una microfinanciera, permitiendo administrar clientes, otorgar préstamos y dar seguimiento a créditos.

## 🚀 Tecnologías

- PHP (PDO)
- MySQL / Base de datos relacional
- Bootstrap 5.3
- HTML / CSS

## ⚙️ Funcionalidades

### 🔐 Autenticación
- Registro de usuarios
- Inicio de sesión con email y contraseña

### 👥 Gestión de clientes
- Registro de nuevos clientes
- Administración de información de clientes

### 💰 Otorgamiento de préstamos
- Registro de préstamos (montos entre $1,000 y $5,000)
- Configuración de tipo de pago:
  - Diario
  - Semanal
  - Quincenal
  - Mensual
- Cálculo de pagos según frecuencia

### 📈 Seguimiento de préstamos
- Monitoreo del estado de los créditos
- Control de pagos realizados

### 📄 Estado de cuenta
- Visualización del estado financiero de cada cliente

## 🗂️ Estructura del proyecto

- `index.php` → Inicio de sesión  
- `registroUsuario.php` → Registro de usuarios  
- `nuevoCliente.php` → Gestión de clientes  
- `otorgarPrestamo.php` → Registro de préstamos  
- `seguimientoPrestamo.php` → Seguimiento de créditos  
- `estadoCuenta.php` → Estado de cuenta  
- `modelo/conexionPDO.php` → Conexión a la base de datos  

## 🛠️ Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/AriadnaYD/Microfinanciera.git
