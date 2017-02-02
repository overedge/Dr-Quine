# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: nahmed-m <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2017/02/02 09:38:27 by nahmed-m          #+#    #+#              #
#    Updated: 2017/02/02 09:40:52 by nahmed-m         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

NAME1 = Colleen
NAME2 = Grace
NAME3 = Sully

SRC1 = Colleen.c
SRC2 = Grace.c
SRC3 = Sully.c

OBJ1 = $(SRC1:.c=.o)
OBJ2 = $(SRC2:.c=.o)
OBJ3 = $(SRC3:.c=.o)

$(NAME):
	gcc -Wall -Wextra -Werror -c $(SRC1)
	gcc -o $(NAME1) $(OBJ1)
	gcc -Wall -Wextra -Werror -c $(SRC2)
	gcc -o $(NAME2) $(OBJ2)
	gcc -Wall -Wextra -Werror -c $(SRC3)
	gcc -o $(NAME3) $(OBJ3)

all: $(NAME1) $(NAME2) $(NAME3)

clean:
	rm -rf $(OBJ1)
	rm -rf $(OBJ2)
	rm -rf $(OBJ3)

fclean: clean
	rm -rf $(NAME1)
	rm -rf $(NAME2)
	rm -rf $(NAME3)

re: fclean all

.PHONY: clean fclean re
