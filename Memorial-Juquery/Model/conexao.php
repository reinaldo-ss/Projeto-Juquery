    <?php 

class Conexao {

	private $pdo;
	
	public function __construct($dbname, $host, $user, $senha)
	{
		try{
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $senha);
		}
		catch (PDOException $e){
			echo "ERRO DE CONEXÃO NO PDO: ".$e->getMessage();
			exit();
		}
		catch (Exception $e){
			echo "ERRO não passou da conexão: ".$e->getMessage();
			exit();
		}

	}


/*--------------------------------------------------------------------------------------------------------*/    

	 public function insereGaleria($nomeCod, $nomeArq, $path, $path2, $titulo, $desc){
                	$insere = $this->pdo->prepare("insert into imagem
                        (nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda) values (:nc, :no, :end, :end2, :t, :l)");
            		$insere->bindValue(":nc",$nomeCod);
                    $insere->bindValue(":no",$nomeArq);
                    $insere->bindValue(":end",$path);
					$insere->bindValue(":end2",$path2);
					$insere->bindValue(":t",$titulo);
                    $insere->bindValue(":l",$desc);
                    $insere->execute();
                }

    public function retornaDadosGaleria(){
                    $retorna = array();
                    $le = $this->pdo->query("select endereco, endereco2, dataUpload, titulo, legenda, id, Extatus from imagem order by dataUpload");
                    $retorna = $le->fetchAll(PDO::FETCH_ASSOC);
                    return $retorna; 
                }

    public function consultaUpdateImg ($id){
                    $result = array();
                    $cons= $this->pdo->prepare("select * from imagem where id = :id");
                    $cons->bindValue(":id", $id);
                    $cons->execute();
                    $result = $cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
                }

    public function alteraImg($titulo, $desc, $id){
                    $altera= $this->pdo->prepare("update imagem SET titulo = :t , legenda = :l WHERE id = :id");
                    $altera->bindValue(":t", $titulo);
                    $altera->bindValue(":l", $desc);
                    $altera->bindValue(":id", $id);
                    $altera->execute();

                    header("Location: ../../Memorial-Juquery-vw-admin/pagAdmin-galeria-imagem.php");
                }

    /*public function excluirImagem($id){
                    $exclui = $this->pdo->prepare("delete from imagem where id = :id");
                    $exclui->bindValue(":id", $id);
                    $exclui->execute();
                }*/

    public function publicarImg($id, $Extatus){
                    $result = $this->pdo->prepare("update imagem SET Extatus = 1 WHERE id = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function rascunhoImg($id, $Extatus){
                    $result = $this->pdo->prepare("update imagem SET Extatus = 0 WHERE id = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

/*--------------------------------------------------------------------------------------------------------*/


    public function insereArtistas($titulo, $compositor, $informacao, $idImagem){
                    $insere = $this->pdo->prepare("insert into video(titulo, autor, caminho, idImagem) values (:t, :a, :c, :img)");
                    $insere->bindValue(":t", $titulo);
                    $insere->bindValue(":a", $compositor);
                    $insere->bindValue(":c", $informacao);
                    $insere->bindValue(":img", $idImagem);
                    $insere->execute();            
            }

    public function retornaArtImg()
                {
                    $retorna = array();
                    $le = $this->pdo->query("select video.titulo, video.autor, video.caminho, video.idVid, video.idImagem, imagem.endereco, imagem.endereco2, video.Extatus from video inner join imagem on video.idImagem = imagem.id");
                    $retorna = $le->fetchAll(PDO::FETCH_ASSOC);
                    return $retorna; 
                }

    public function excluirArt($id){
                    $exclui = $this->pdo->prepare("delete from video where idVid = :id");
                    $exclui->bindValue(":id", $id);
                    $exclui->execute();
                }

    public function publicarArt($id, $Extatus){
                    $result = $this->pdo->prepare("update video SET Extatus = 1 WHERE idVid = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function rascunhoArt($id, $Extatus){
                    $result = $this->pdo->prepare("update video SET Extatus = 0 WHERE idVid = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function editaVid($idArt){
                $result = array();
                $cons= $this->pdo->prepare("select * from video where idVid = :id");
                $cons->bindValue(":id", $idArt);
                $cons->execute();
                $result = $cons->fetch(PDO::FETCH_ASSOC);
                return $result;
            }

            public function consultaImgArt($idArt){
                $result = array();
                $cons= $this->pdo->prepare("select imagem.*, video.idVid from imagem inner join video on video.idImagem = imagem.id where idVid = :id");
                $cons->bindValue(":id", $idArt);
                $cons->execute();
                $result = $cons->fetch(PDO::FETCH_ASSOC);
                return $result;
}

        

            public function alteraArt($id, $idImagem, $titulo, $autor, $caminho){
                $altera= $this->pdo->prepare("update video SET idImagem = :idImg, titulo = :t , autor = :au , caminho = :c  WHERE idVid = :id");
                    $altera->bindValue(":idImg", $idImagem);
                    $altera->bindValue(":t", $titulo);
                    $altera->bindValue(":au", $autor);
                    $altera->bindValue(":c", $caminho);                    
                    $altera->bindValue(":id", $id);
                    $altera->execute();

                    header("Location: ../../Memorial-Juquery-vw-admin/pagAdmin-artistas.php");
            }

/*--------------------------------------------------------------------------------------------------------*/

    public function insereEvento($idImagem, $diaSemana, $diaMes, $mes, $horario, $nomeEvento, $ano, $localizacao, $linkEvento, $descricao){
            $insere = $this->pdo->prepare("insert into eventos (idImagem, diaSemana, diaMes, mes, horario, nomeEvento, ano, localizacao, linkEvento, descricao) 
                values (:img, :ds, :dm, :m, :h, :ne, :a, :l, :le, :desc)" );
            $insere->bindValue(":img", $idImagem);
            $insere->bindValue(":ds", $diaSemana);
            $insere->bindValue(":dm", $diaMes);
            $insere->bindValue(":m", $mes);
            $insere->bindValue(":h", $horario);
            $insere->bindValue(":ne", $nomeEvento);
            $insere->bindValue(":a", $ano);
            $insere->bindValue(":l", $localizacao);
            $insere->bindValue(":le", $linkEvento);
             $insere->bindValue(":desc", $descricao);
            $insere->execute();
        }/*
        public function retornaEventos()
                {
                    $retorna2 = array();
                    $le3 = $this->pdo->query("select diaSemana, diaMes, mes, horario, nomeEvento, ano, localizacao, linkEvento, idImagem from eventos order by linkEvento");
                    $retorna2 = $le3->fetchAll(PDO::FETCH_ASSOC);
                    return $retorna2; 
                }*/


    public function retornaEventImg(){
                $retorna = array();
                $le = $this->pdo->query("select eventos.diaSemana, eventos.idEvent, eventos.diaMes, eventos.mes, eventos.Extatus, eventos.horario, eventos.nomeEvento, eventos.ano, eventos.localizacao, eventos.linkEvento, eventos.idImagem, imagem.endereco2, imagem.endereco, eventos.descricao from eventos inner join imagem on eventos.idImagem = imagem.id");
                $retorna = $le->fetchAll(PDO::FETCH_ASSOC);
                return $retorna; 
            }

    public function excluirEve($id){
                    $exclui = $this->pdo->prepare("delete from eventos where idEvent = :id");
                    $exclui->bindValue(":id", $id);
                    $exclui->execute();
                }

    public function publicarEve($id, $Extatus){
                    $result = $this->pdo->prepare("update eventos SET Extatus = 1 WHERE idEvent = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function rascunhoEve($id, $Extatus){
                    $result = $this->pdo->prepare("update eventos SET Extatus = 0 WHERE idEvent = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function editaEve($idEvent){
                    $result = array();
                    $cons= $this->pdo->prepare("select * from eventos where idEvent = :id");
                    $cons->bindValue(":id", $idEvent);
                    $cons->execute();
                    $result = $cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
                }

    public function consultaImgEve($idEvent){
                    $result = array();
                    $cons= $this->pdo->prepare("select imagem.*, eventos.idEvent from imagem inner join eventos on eventos.idImagem = imagem.id where idEvent = :id");
                    $cons->bindValue(":id", $idEvent);
                    $cons->execute();
                    $result = $cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
    }

    public function alteraEve($id, $idImagem, $diaSemana, $diaMes, $mes, $horario, $nomeEvento, $ano, $localizacao, $linkEvento, $descricao){
                    $altera= $this->pdo->prepare("update eventos SET idImagem = :idImg , diaSemana = :ds , diaMes = :dm , mes = :m , horario = :h, nomeEvento = :ne, ano = :a, localizacao = :l, linkEvento = :le, descricao = :d WHERE idEvent = :id");

                        $altera->bindValue(":idImg", $idImagem);
                        $altera->bindValue(":ds", $diaSemana);
                        $altera->bindValue(":dm", $diaMes);
                        $altera->bindValue(":m", $mes);
                        $altera->bindValue(":h", $horario);
                        $altera->bindValue(":ne", $nomeEvento);
                        $altera->bindValue(":a", $ano);
                        $altera->bindValue(":l", $localizacao);
                        $altera->bindValue(":le", $linkEvento);
                        $altera->bindValue(":d", $descricao);
                        $altera->bindValue(":id", $id);
                        $altera->execute();

                        header("Location: ../../Memorial-Juquery-vw-admin/pagAdmin-eventos.php");
                }

/*--------------------------------------------------------------------------------------------------------*/

    public function insereAtualidade($titulo, $descricao, $conteudo, $dataAtua, $idImagem, $linkAtua){
                $insere = $this->pdo->prepare("insert into atualidades (titulo, descricao, conteudo, dataAtua, idImagem, linkAtua) values(:tit, :des, :cont, :data, :idima, :linkAtua)");
                $insere->bindValue(":tit", $titulo);
                $insere->bindValue(":des", $descricao);
                $insere->bindValue(":cont", $conteudo);
                $insere->bindValue(":data", $dataAtua);
                $insere->bindValue(":idima", $idImagem);
                $insere->bindValue(":linkAtua", $linkAtua);
                $insere->execute();
            }

    public function retornaAtuaImg(){
                $retorna = array();
                $le = $this->pdo->query("select atualidades.titulo, atualidades.idAtua, atualidades.descricao, atualidades.conteudo, atualidades.dataAtua, atualidades.Extatus, atualidades.idImagem, atualidades.linkAtua, imagem.endereco2, imagem.endereco from atualidades inner join imagem on atualidades.idImagem = imagem.id");
                $retorna = $le->fetchAll(PDO::FETCH_ASSOC);
                return $retorna;
            }

    public function excluirAtualidade($id){
                    $exclui = $this->pdo->prepare("delete from atualidades where idAtua = :id");
                    $exclui->bindValue(":id", $id);
                    $exclui->execute();
                }

    public function publicarAtu($id, $Extatus){
                    $result = $this->pdo->prepare("update atualidades SET Extatus = 1 WHERE idAtua = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function rascunhoAtu($id, $Extatus){
                    $result = $this->pdo->prepare("update atualidades SET Extatus = 0 WHERE idAtua = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function editaAtu($idAtua){
                    $result = array();
                    $cons= $this->pdo->prepare("select * from atualidades where idAtua = :id");
                    $cons->bindValue(":id", $idAtua);
                    $cons->execute();
                    $result = $cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
                }

    public function consultaImgAtu($idAtua){
                    $result = array();
                    $cons= $this->pdo->prepare("select imagem.*, atualidades.idAtua from imagem inner join atualidades on atualidades.idImagem = imagem.id where idAtua = :id");
                    $cons->bindValue(":id", $idAtua);
                    $cons->execute();
                    $result = $cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
    }

    public function alteraAtu($idAtua, $titulo, $descricao, $conteudo, $dataAtua, $idImagem, $linkAtua){
                    $altera= $this->pdo->prepare("update atualidades SET titulo = :t , descricao = :d , conteudo = :c , dataAtua = :da , idImagem = :idImg, linkAtua = :linkAtua WHERE idAtua = :id");

                        $altera->bindValue(":t", $titulo);
                        $altera->bindValue(":d", $descricao);
                        $altera->bindValue(":c", $conteudo);
                        $altera->bindValue(":da", $dataAtua);
                        $altera->bindValue(":idImg", $idImagem);
                        $altera->bindValue(":linkAtua", $linkAtua);
                        $altera->bindValue(":id", $idAtua);
                        $altera->execute();

                        header("Location: ../../Memorial-Juquery-vw-admin/pagAdmin-atualidades.php");
                }

/*--------------------------------------------------------------------------------------------------------*/

    public function insereHistoria($idImagem, $titulo, $ano, $conteudo){
                $insere = $this->pdo->prepare("insert into historia ( idImagem, titulo, ano, conteudo) values (:img, :t, :a, :c)");
                $insere->bindValue(":img", $idImagem); 
                $insere->bindValue(":t", $titulo);
                $insere->bindValue(":a", $ano);
                $insere->bindValue(":c", $conteudo); 
                $insere->execute();
    }

    public function retornaHistImg(){
                $retorna = array();
                $le = $this->pdo->query("select historia.titulo, historia.idHist, historia.ano, historia.conteudo, historia.idImagem, historia.Extatus, imagem.endereco, imagem.endereco2 from historia inner join imagem on historia.idImagem = imagem.id");
                $retorna = $le->fetchAll(PDO::FETCH_ASSOC);
                return $retorna;
            }

    public function excluirHistoria($id){
                    $exclui = $this->pdo->prepare("delete from historia where idHist = :id");
                    $exclui->bindValue(":id", $id);
                    $exclui->execute();
                }

    public function publicarHis($id, $Extatus){
                    $result = $this->pdo->prepare("update historia SET Extatus = 1 WHERE idHist = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function rascunhoHis($id, $Extatus){
                    $result = $this->pdo->prepare("update historia SET Extatus = 0 WHERE idHist = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function editaHis($id){
                    $result = array();
                    $cons= $this->pdo->prepare("select * from historia where idHist = :id");
                    $cons->bindValue(":id",$id);
                    $cons->execute();
                    $result=$cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
                }

    public function alteraHis($id, $altimagem, $alttitulo, $altano, $altconteudo){
                    $alteraHis= $this->pdo->prepare("update historia SET ano = :a, titulo = :t, conteudo = :c, idImagem = :idimg WHERE idHist = :id");
                    $alteraHis->bindValue(":a", $altano);
                    $alteraHis->bindValue(":t", $alttitulo);
                    $alteraHis->bindValue(":c", $altconteudo);
                    $alteraHis->bindValue(":idimg", $altimagem);
                    $alteraHis->bindValue(":id", $id);
                    $alteraHis->execute();

                    header("Location: ../../Memorial-Juquery-vw-admin/pagAdmin-historia.php");
                }

    public function consultaImgHis($idHist){
                    $result = array();
                    $cons= $this->pdo->prepare("select imagem.*, historia.idHist from imagem inner join historia on historia.idImagem = imagem.id where idHist = :id");
                    $cons->bindValue(":id", $idHist);
                    $cons->execute();
                    $result = $cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
    }

/*--------------------------------------------------------------------------------------------------------*/

    public function insereArquitetura ($idImagem, $titulo, $conteudo, $subtitulo, $linkArq){
                    $insere = $this->pdo->prepare("insert into arquitetura (titulo, conteudo, subtitulo, linkArq, idImagem) values (:tit, :cont, :sub, :linkArq, :idImg)");
                    $insere->bindValue(":tit", $titulo);
                    $insere->bindValue(":idImg", $idImagem);
                    $insere->bindValue(":sub", $subtitulo);
                    $insere->bindValue(":linkArq", $linkArq);
                    $insere->bindValue(":cont", $conteudo);
                    $insere->execute();
     }


    public function retornaArqImg(){
                $retorna = array();
                $le = $this->pdo->query("select arquitetura.titulo, arquitetura.idArq, arquitetura.subtitulo, arquitetura.linkArq, arquitetura.conteudo, arquitetura.idImagem, arquitetura.Extatus, imagem.endereco2, imagem.endereco from arquitetura inner join imagem on arquitetura.idImagem = imagem.id");
                $retorna = $le->fetchAll(PDO::FETCH_ASSOC);
                return $retorna;
            }

    public function excluirArq($id){
                    $exclui = $this->pdo->prepare("delete from arquitetura where idArq = :id");
                    $exclui->bindValue(":id", $id);
                    $exclui->execute();
                }

    public function publicarArq($id, $Extatus){
                    $result = $this->pdo->prepare("update arquitetura SET Extatus = 1 WHERE idArq = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

    public function rascunhoArq($id, $Extatus){
                    $result = $this->pdo->prepare("update arquitetura SET Extatus = 0 WHERE idArq = :id");
                    $result->bindValue(":id", $id);
                    $result->execute();
                }

                public function editaArq ($idArq){
                    $result = array();
                    $cons= $this->pdo->prepare("select * from arquitetura where idArq = :id");
                    $cons->bindValue(":id", $idArq);
                    $cons->execute();
                    $result = $cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
                }
    public function consultaImgArq($idArq){
                    $result = array();
                    $cons= $this->pdo->prepare("select imagem.*, arquitetura.idArq from imagem inner join arquitetura on arquitetura.idImagem = imagem.id where idArq = :id");
                    $cons->bindValue(":id", $idArq);
                    $cons->execute();
                    $result = $cons->fetch(PDO::FETCH_ASSOC);
                    return $result;
                }
    public function alteraArq($idArq, $titulo, $idImagem, $subtitulo, $linkArq, $conteudo){
                    $altera= $this->pdo->prepare("update arquitetura SET titulo = :t , subtitulo = :s, linkArq = :linkArq, conteudo = :c, idImagem = :idImg WHERE idArq = :id");

                        $altera->bindValue(":t", $titulo);
                        $altera->bindValue(":s", $subtitulo);
                        $altera->bindValue(":linkArq", $linkArq);
                        $altera->bindValue(":c", $conteudo);
                        $altera->bindValue(":idImg", $idImagem);
                        $altera->bindValue(":id", $idArq);
                        $altera->execute();

                        header("Location: ../../Memorial-Juquery-vw-admin/pagAdmin-arquitetura.php");
                }

}

?>