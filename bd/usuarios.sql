using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Escola
{
    #region Usuarios
    public class Usuarios
    {
        #region Member Variables
        protected string _nome;
        protected string _telefone;
        protected string _email;
        protected string _sexo;
        protected string _dataNascimento;
        protected string _senha;
        protected int _id;
        #endregion
        #region Constructors
        public Usuarios() { }
        public Usuarios(string nome, string telefone, string email, string sexo, string dataNascimento, string senha)
        {
            this._nome=nome;
            this._telefone=telefone;
            this._email=email;
            this._sexo=sexo;
            this._dataNascimento=dataNascimento;
            this._senha=senha;
        }
        #endregion
        #region Public Properties
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        public virtual string Telefone
        {
            get {return _telefone;}
            set {_telefone=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Sexo
        {
            get {return _sexo;}
            set {_sexo=value;}
        }
        public virtual string DataNascimento
        {
            get {return _dataNascimento;}
            set {_dataNascimento=value;}
        }
        public virtual string Senha
        {
            get {return _senha;}
            set {_senha=value;}
        }
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        #endregion
    }
    #endregion
}