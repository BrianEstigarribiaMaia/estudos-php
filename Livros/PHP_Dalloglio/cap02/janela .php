<?php
//instanciar objeto janela 
$janela = new GtkWindow;
//definir tamanho da janela
$janela->set_size_request(300,200);

//instanciar rótulo de textp
$label = new GtkLabel('Olá mundo'); 
//adicionar rótulo a janela 
$janela->add($label);
//exibir janela 
$janela->show_all()

//controle Gtk
Gtk::Main();
?>