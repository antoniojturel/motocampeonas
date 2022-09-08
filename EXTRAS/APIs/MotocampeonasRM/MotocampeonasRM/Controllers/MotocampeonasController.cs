using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using MotocampeonasRM.Models;
using MotocampeonasRM.Repositories;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Http;

namespace MotocampeonasRM.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class MotocampeonasController : ControllerBase
    {
        RepositoryMotocampeonas repo;


        public MotocampeonasController(RepositoryMotocampeonas repo)
        {
            this.repo = repo;
        }

        // GET api/values
        [HttpGet]
        public ActionResult<List<Motocampeona>> Get()
        {
            return this.repo.GetMotocampeonas();
        }

    }
}
