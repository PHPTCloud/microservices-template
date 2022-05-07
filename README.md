# Microservice tempalte

Пример использования Docker + Docker compose в связке с Nginx + PHP-FPM{N}.

# Установка

1. Создать общую сеть в проекте proxy `/proxy docker-compose up -d`
2. Запустить сервисы `service_1`, `service_2`, `service_3` через `docker-compose up -d`
3. Перезапустить proxy `/proxy docker-compose up -d`
4. В hosts добавить следующие домены
```bash
127.0.0.1	first.services.local
127.0.0.1	second.services.local
127.0.0.1	third.services.local
```