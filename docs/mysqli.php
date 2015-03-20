<h1>MySqli Constructor</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
MySqli(string serverdb, string userdb, string passdb, string selectdbs)
</pre>
Создаёт объект работы с базой данных<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">serverdb</h3><span class="paragraph">Переменная отвечающая за адрес сервера Базы Данных</span>
<h3 class="perem">userdb</h3><span class="paragraph">Переменная отвечающая за имя пользователя сервера Базы Данных</span>
<h3 class="perem">passdb</h3><span class="paragraph">Переменная отвечающая за пароль к серверу Базы Данных</span>
<h3 class="perem">selectdbs</h3><span class="paragraph">Переменная отвечающая за имя базы даннх внутри сервера</span>
<br />
<h2>Пример:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Console.WriteLine(Test.Version());
            Console.ReadLine();
        }
    }
}
</pre>