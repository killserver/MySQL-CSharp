<h1>OptionLog</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void OptionLog ( bool zpath )
</pre>
Переключает систему логирования.<br />
true - включение логирования<br />
false - отключает логирование, <font color="red"><b>при этом:</b></font> в случаи ошибки в запросе - запрос не будет выполнен<br />
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
            Test.OptionLog(false);
            Console.WriteLine("Логирование DB отключено");
            Console.ReadLine();
        }
    }
}
</pre>
