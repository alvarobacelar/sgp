<?php

session_start();

session_destroy(); // destroi todas as sessions criadas

header("Location: ./");
