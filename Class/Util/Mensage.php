<?php

namespace Util;

abstract class Mensage
{
    /* ERROS */
    public const MSG_ERRO_GENERICO    = 'Algum erro ocorreu na requisicao!';
    public const MSG_ERRO_SEM_RETORNO = 'Nenhum registro encontrado!';
    public const MSG_ERRO_NAO_AFETADO = 'Nenhum registro afetado!';
    public const MSG_ERRO_CRIAR       = 'Não foi possível fazer um novo registro!';
    public const MSG_ERRO_ATUALIZADO  = 'Não foi possível atualizar o registro!';
    

    /* SUCESSO */
    public const MSG_DELETADO_SUCESSO   = 'Registro deletado com Sucesso!';
    public const MSG_ATUALIZADO_SUCESSO = 'Registrado atualizado com Sucesso!';
    public const MSG_CRIADO_SUCESSO     = 'Registrado com Sucesso!';


    /* RECURSO USUARIOS */
    public const MSG_ERRO_ID_OBRIGATORIO  = 'ID é obrigatorio!';
    public const MSG_ERRO_LOGIN_EXISTENTE = 'Login ja existente!';
    public const MSG_ERRO_LOGIN_SENHA_OBRIGATORIO = 'Login e Senha são obrigatorios!';

}