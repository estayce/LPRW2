@extends('layouts.site.main')
@section('title', "Home")
@section('content')


<div class="blog_container">
    <div class="container">
        <div class="row blog_content_row">
            <div class="col">
                <div class="blog_content">
                    <div class="blog_post_title_container">
                        <div class="blog_category"><a href="#"></a></div>

                        <div class="blog_title">
                            <h1>Regras de uso</h1><br><br>
                        </div>
                    </div>
                    <div class="blog_text">
                        <p><b>Quantidade de livros permitidos:</b>
                            Cada usuário pode emprestar no máximo 3 livros universitários por vez.<br><br>

                            <b>Prazo para devolução:</b>
                            O prazo para devolução dos livros universitários é de 14 dias a partir da data do empréstimo.
                            <br><br>
                            <b>Renovação:</b>
                            É permitida a renovação do empréstimo por mais 14 dias, desde que não haja solicitação de reserva do livro por outro usuário.
                            O livro só pode ser renovado uma vez. Ou seja, o prazo total de empréstimo, incluindo a renovação, é de 28 dias.
                            <br><br>
                            <b>Observações:</b>
                            Caso o usuário não devolva os livros no prazo estipulado, serão aplicadas as penalidades previstas nas políticas da biblioteca, como multas ou suspensão temporária do direito de empréstimo.
                            A reserva de livros por outros usuários pode limitar a renovação, exigindo que o livro seja devolvido na data estipulada.
                            Essas regras podem ser adaptadas conforme as necessidades e políticas específicas da biblioteca.
                            <br><br>

                            <b>Restrição de Livros Específicos:</b>
                            Alguns livros podem estar sujeitos a restrições especiais de empréstimo devido à sua importância, demanda ou raridade.
                            Esses livros podem ter prazos de empréstimo mais curtos ou exigir autorização especial.
                            <br><br>
                            <b>Multa por Atraso na Devolução:</b>
                            Aplica-se uma multa diária por cada livro não devolvido dentro do prazo estabelecido.
                            A taxa de multa pode variar dependendo do tipo de usuário (estudante, professor, etc.) e da quantidade de dias em atraso.
                            <br><br>
                            Se um usuário acumular um determinado valor em multas, sua conta pode ser suspensa temporariamente, impedindo-o de fazer novos empréstimos até que as multas sejam pagas.<br><br>
                            Livros de Referência e Material de Leitura na Biblioteca:
                            Livros de referência, como dicionários, enciclopédias e materiais de leitura na biblioteca podem não ser permitidos para empréstimo.
                            Esses materiais geralmente estão disponíveis apenas para consulta no local da biblioteca.
                        </p>


                        <figure class="blog_post_image">
                            <img src="images/" alt="">
                        </figure>







                        <p></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

</div>
</div>
@endsection