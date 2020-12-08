# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    init_database.sql                                  :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: aherlind <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/07 13:58:09 by aherlind          #+#    #+#              #
#    Updated: 2020/12/07 13:58:20 by aherlind         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

CREATE DATABASE server_db;
CREATE USER 'aherlind'@'localhost' IDENTIFIED BY 'aherlind21';
GRANT ALL PRIVILEGES ON server_db.* TO 'aherlind'@'localhost';
FLUSH PRIVILEGES;
